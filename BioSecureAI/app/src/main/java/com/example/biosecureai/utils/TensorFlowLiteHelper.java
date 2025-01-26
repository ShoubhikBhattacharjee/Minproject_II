package com.example.biosecureai.utils;

import android.content.Context;
import android.graphics.Bitmap;
import org.tensorflow.lite.Interpreter;

import java.io.FileInputStream;
import java.io.IOException;
import java.nio.MappedByteBuffer;
import java.nio.channels.FileChannel;
import java.nio.ByteBuffer;

public class TensorFlowLiteHelper {

    private Interpreter interpreter;

    public TensorFlowLiteHelper(Context context) {
        try {
            interpreter = new Interpreter(loadModelFile(context));
        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    private MappedByteBuffer loadModelFile(Context context) throws IOException {
        // Open the model file from the assets folder
        FileInputStream inputStream = new FileInputStream(context.getAssets().openFd("anti_spoof_model.tflite").getFileDescriptor());
        FileChannel fileChannel = inputStream.getChannel();

        // Use fileChannel.map() to map the file into memory
        long fileSize = fileChannel.size();  // Get the size of the model file
        MappedByteBuffer mappedByteBuffer = fileChannel.map(FileChannel.MapMode.READ_ONLY, 0, fileSize);

        // Close the inputStream after mapping the file into memory
        inputStream.close();

        return mappedByteBuffer;
    }

    public boolean runModel(Bitmap bitmap) {
        float[][] input = preprocessBitmap(bitmap);
        float[][] output = new float[1][1];
        interpreter.run(input, output);
        return output[0][0] > 0.5; // Threshold for live detection
    }

    private float[][] preprocessBitmap(Bitmap bitmap) {
        // Resize and preprocess the bitmap for model input
        Bitmap scaledBitmap = Bitmap.createScaledBitmap(bitmap, 224, 224, false);
        float[][] input = new float[1][224 * 224 * 3];
        int[] pixels = new int[224 * 224];
        scaledBitmap.getPixels(pixels, 0, 224, 0, 0, 224, 224);

        // Normalize pixel values to [0, 1]
        for (int i = 0; i < pixels.length; i++) {
            int pixel = pixels[i];
            input[0][i * 3] = ((pixel >> 16) & 0xFF) / 255.0f; // Red
            input[0][i * 3 + 1] = ((pixel >> 8) & 0xFF) / 255.0f; // Green
            input[0][i * 3 + 2] = (pixel & 0xFF) / 255.0f; // Blue
        }
        return input;
    }
}
