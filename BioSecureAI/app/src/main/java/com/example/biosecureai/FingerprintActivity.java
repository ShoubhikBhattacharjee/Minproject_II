package com.example.biosecureai;

import android.os.Bundle;
import android.widget.TextView;
import android.widget.Toast;
import androidx.appcompat.app.AppCompatActivity;

import com.example.biosecureai.R;
import com.example.biosecureai.utils.FingerprintHelper;

public class FingerprintActivity extends AppCompatActivity {

    private FingerprintHelper fingerprintHelper;
    private TextView detectionResult;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_fingerprint);

        detectionResult = findViewById(R.id.detectionResult);

        fingerprintHelper = new FingerprintHelper(this);

        findViewById(R.id.touchButton).setOnTouchListener((v, event) -> {
            boolean isReal = fingerprintHelper.detectTouchLiveness(event);
            detectionResult.setText(isReal ? "Live Touch Detected" : "Spoofed Touch Detected");
            return true;
        });

        findViewById(R.id.captureFingerprintButton).setOnClickListener(v -> {
            boolean isLiveFingerprint = fingerprintHelper.analyzeFingerprintImage();
            Toast.makeText(this, isLiveFingerprint ? "Live Fingerprint Detected" : "Spoofed Fingerprint Detected", Toast.LENGTH_SHORT).show();
        });
    }
}