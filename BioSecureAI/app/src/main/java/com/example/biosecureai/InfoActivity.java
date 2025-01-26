package com.example.biosecureai;

import android.os.Bundle;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class InfoActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info);

        TextView infoText = findViewById(R.id.infoText);
        infoText.setText("Password entropy is a measure of how unpredictable or strong your password is. "
                + "It is calculated based on the length of the password and the variety of characters used (e.g., lowercase, uppercase, numbers, symbols). "
                + "A higher entropy indicates a stronger password that is harder to crack.");
    }
}