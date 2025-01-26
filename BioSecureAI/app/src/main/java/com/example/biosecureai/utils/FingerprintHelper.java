package com.example.biosecureai.utils;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.view.MotionEvent;

import com.example.biosecureai.R;

import org.tensorflow.lite.Interpreter;

import java.io.FileInputStream;
import java.io.IOException;
import java.nio.MappedByteBuffer;
import java.nio.channels.FileChannel;
import java.nio.ByteBuffer;

public class FingerprintHelper {

    private final Context context;
    private Interpreter interpreter;
    private float lastX = 0;
    private float lastY = 0;
    private long lastTime = 0;

    public FingerprintHelper(Context context) {
        this.context = context;
        try {
            interpreter = new Interpreter(loadModelFile());
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private MappedByteBuffer loadModelFile() throws IOException {
        try (FileInputStream fis = context.getAssets().openFd("fingerprint_model.tflite").createInputStream();
             FileChannel fileChannel = fis.getChannel()) {
            return fileChannel.map(FileChannel.MapMode.READ_ONLY, 0, fileChannel.size());
        }
    }

    // Detect touch liveness based on pressure or movement
    public boolean detectTouchLiveness(MotionEvent event) {
        float pressure = event.getPressure();
        float size = event.getSize();

        long currentTime = System.currentTimeMillis();
        float deltaX = Math.abs(event.getX() - lastX);
        float deltaY = Math.abs(event.getY() - lastY);
        long deltaTime = currentTime - lastTime;

        lastX = event.getX();
        lastY = event.getY();
        lastTime = currentTime;

        float speed = (deltaX + deltaY) / (deltaTime + 1);  // Avoid division by zero

        // Adjust thresholds based on device testing
        return (pressure > 0.2 && size > 0.1 && speed > 0.01);
    }

    // Analyze captured fingerprint image
    public boolean analyzeFingerprintImage() {
        // Simulate captured fingerprint bitmap (use a real bitmap in production)
        Bitmap fingerprint = BitmapFactory.decodeResource(context.getResources(), R.drawable.fingerprint_sample);
        float[][][][] input = preprocessBitmap(fingerprint);
        float[][][][] output = new float[1][1][1][1];
        interpreter.run(input, output);
        return output[0][0][0][0] > 0.5; // Threshold for live detection
    }

    private float[][][][] preprocessBitmap(Bitmap bitmap) {
        Bitmap scaledBitmap = Bitmap.createScaledBitmap(bitmap, 224, 224, false);
        float[][][][] input = new float[1][224][224][3];
        for (int y = 0; y < 224; y++) {
            for (int x = 0; x < 224; x++) {
                int pixel = scaledBitmap.getPixel(x, y);
                input[0][y][x][0] = ((pixel >> 16) & 0xFF) / 255.0f; // Red
                input[0][y][x][1] = ((pixel >> 8) & 0xFF) / 255.0f;  // Green
                input[0][y][x][2] = (pixel & 0xFF) / 255.0f;         // Blue
            }
        }
        return input;
    }
}
