package com.example.biosecureai;

import android.os.Bundle;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;

public class ResultActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_result);

        TextView resultText = findViewById(R.id.resultText);
        boolean detectionResult = getIntent().getBooleanExtra("RESULT", false);

        resultText.setText(detectionResult ? "Authentication Passed" : "Authentication Failed");
    }
}