package com.example.biosecureai;

import android.os.Bundle;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;

import com.example.biosecureai.utils.FaceDetectorHelper;
import com.example.biosecureai.utils.TensorFlowLiteHelper;

public class CameraActivity extends AppCompatActivity {

    private static final String TAG = "CameraActivity";
    private FaceDetectorHelper faceDetectorHelper;
    private TensorFlowLiteHelper tfLiteHelper;
    private TextView detectionResult;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_camera);

        detectionResult = findViewById(R.id.detectionResult);

        // Initialize face detector and TensorFlow Lite model
        faceDetectorHelper = new FaceDetectorHelper(this);
        tfLiteHelper = new TensorFlowLiteHelper(this);

        faceDetectorHelper.setOnFaceDetectedListener(bitmap -> {
            boolean isLive = tfLiteHelper.runModel(bitmap);
            detectionResult.setText(isLive ? "Live Face Detected" : "Spoof Detected");
        });
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        faceDetectorHelper.release();
    }
}