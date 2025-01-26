package com.example.biosecureai;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.text.method.HideReturnsTransformationMethod;
import android.text.method.PasswordTransformationMethod;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class PasswordActivity extends AppCompatActivity {

    private EditText passwordInput;
    private TextView entropyResult, feedbackMessage, bestEntropyText, resultText;
    private ImageView toggleVisibility, infoButton;
    private Button checkButton;
    private boolean isPasswordVisible = false;
    private SharedPreferences sharedPreferences;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_password);

        // Initialize UI elements
        passwordInput = findViewById(R.id.passwordInput);
        entropyResult = findViewById(R.id.entropyResult);
        feedbackMessage = findViewById(R.id.feedbackMessage);
        bestEntropyText = findViewById(R.id.bestEntropyText);
        resultText = findViewById(R.id.resultText);
        resultText.setVisibility(View.INVISIBLE);
        toggleVisibility = findViewById(R.id.toggleVisibility);
        checkButton = findViewById(R.id.checkButton);

        sharedPreferences = getSharedPreferences("PasswordStrengthPrefs", MODE_PRIVATE);
        float bestEntropy = sharedPreferences.getFloat("bestEntropy", 0);
        updateBestEntropyText(bestEntropy);

        // Password visibility toggle
        toggleVisibility.setOnClickListener(view -> togglePasswordVisibility());

        // Real-time password evaluation on text change
        passwordInput.addTextChangedListener(new TextWatcher() {
            @Override
            public void onTextChanged(CharSequence s, int start, int before, int count) {
                evaluatePassword(s.toString());
                resultText.setVisibility(View.INVISIBLE);
            }

            @Override
            public void beforeTextChanged(CharSequence s, int start, int count, int after) {}

            @Override
            public void afterTextChanged(Editable s) {}
        });

        // Button click listener to show password strength in steps
        checkButton.setOnClickListener(view -> {
            String password = passwordInput.getText().toString();
            if (password.isEmpty()) {
                resultText.setText("Please enter a password!");
                return;
            }
            else {
                resultText.setVisibility(View.VISIBLE);
            }

            long n = 1, i;
            for (i = 1; i <= password.length(); i++) {
                n = Math.abs(n * 94);
            }

            String stepsMessage = "A hacker could crack your password in approximately " + n + " steps.";
            String result = stepsMessage;
            resultText.setText(result);
        });
    }

    private void togglePasswordVisibility() {
        if (isPasswordVisible) {
            // Hide password
            passwordInput.setTransformationMethod(PasswordTransformationMethod.getInstance());
            toggleVisibility.setImageResource(R.drawable.ic_visibility_off);
            isPasswordVisible = false;
        } else {
            // Show password
            passwordInput.setTransformationMethod(HideReturnsTransformationMethod.getInstance());
            toggleVisibility.setImageResource(R.drawable.ic_visibility);
            isPasswordVisible = true;
        }
    }

    private void evaluatePassword(String password) {
        int length = password.length();
        int poolSize = 0;

        // Determine character pool size
        if (password.matches(".*[a-z].*")) poolSize += 26; // Lowercase letters
        if (password.matches(".*[A-Z].*")) poolSize += 26; // Uppercase letters
        if (password.matches(".*\\d.*")) poolSize += 10; // Numbers
        if (password.matches(".*[!@#$%^&(),.?\":{}|<>].*")) poolSize += 32; // Special characters

        // Calculate entropy
        double entropy = 0;
        if (poolSize > 0) {
            entropy = Math.log(Math.pow(poolSize, length)) / Math.log(2); // Convert log base to 2
        }

        // Update UI with entropy and feedback
        entropyResult.setText(String.format("Entropy: %.2f bits", entropy));
        feedbackMessage.setText(getFeedbackMessage(entropy));

        // Update best entropy if applicable
        float bestEntropy = sharedPreferences.getFloat("bestEntropy", 0);
        if (entropy > bestEntropy) {
            SharedPreferences.Editor editor = sharedPreferences.edit();
            editor.putFloat("bestEntropy", (float) entropy);
            editor.apply();
            updateBestEntropyText((float) entropy);
        }
    }

    private String getFeedbackMessage(double entropy) {
        if (entropy < 28) {
            feedbackMessage.setTextColor(getResources().getColor(R.color.red));
            resultText.setBackgroundColor(getResources().getColor(R.color.red));
            return "Very Weak: Can be cracked instantly.";
        } else if (entropy < 36) {
            feedbackMessage.setTextColor(getResources().getColor(R.color.orange));
            resultText.setBackgroundColor(getResources().getColor(R.color.orange));
            return "Weak: Can be cracked in minutes.";
        } else if (entropy < 60) {
            feedbackMessage.setTextColor(getResources().getColor(R.color.yellow));
            resultText.setBackgroundColor(getResources().getColor(R.color.yellow));
            return "Reasonable: Can be cracked in days.";
        } else if (entropy < 128) {
            feedbackMessage.setTextColor(getResources().getColor(R.color.light_green));
            resultText.setBackgroundColor(getResources().getColor(R.color.light_green));
            return "Strong: Takes years to crack.";
        } else {
            feedbackMessage.setTextColor(getResources().getColor(R.color.green));
            resultText.setBackgroundColor(getResources().getColor(R.color.green));
            return "Very Strong: Practically uncrackable.";
        }
    }

    private void updateBestEntropyText(float bestEntropy) {
        bestEntropyText.setText(String.format("Best Entropy: %.2f bits", bestEntropy));
    }
}