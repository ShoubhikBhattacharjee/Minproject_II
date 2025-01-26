package com.example.biosecureai.utils;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.media.Image;

import androidx.annotation.OptIn;
import androidx.camera.core.ExperimentalGetImage;
import androidx.camera.core.ImageProxy;

import java.io.ByteArrayOutputStream;
import java.nio.ByteBuffer;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;

public class FaceDetectorHelper {

    private final ExecutorService executor = Executors.newSingleThreadExecutor();
    private OnFaceDetectedListener listener;

    public FaceDetectorHelper(Context context) {
        // Initialize CameraX or any other face detection tools here
    }

    public void analyze(ImageProxy image) {
        Bitmap bitmap = convertImageProxyToBitmap(image); // Implement this function
        if (listener != null) {
            listener.onFaceDetected(bitmap);
        }
        image.close();
    }

    public void setOnFaceDetectedListener(OnFaceDetectedListener listener) {
        this.listener = listener;
    }

    public void release() {
        executor.shutdown();
    }

    public interface OnFaceDetectedListener {
        void onFaceDetected(Bitmap bitmap);
    }

    @OptIn(markerClass = ExperimentalGetImage.class)
    public Bitmap convertImageProxyToBitmap(ImageProxy imageProxy) {
        // Get the Image from the ImageProxy
        Image image = imageProxy.getImage();
        if (image != null) {
            // Get the YUV byte buffer from the image
            ByteBuffer buffer = image.getPlanes()[0].getBuffer(); // Only dealing with Y plane for simplicity
            byte[] bytes = new byte[buffer.remaining()];
            buffer.get(bytes);

            // Convert YUV to RGB using an appropriate method or library (e.g., YuvImage, NV21 conversion)
            Bitmap bitmap = convertYUVToBitmap(bytes, imageProxy.getWidth(), imageProxy.getHeight());

            // Close the image to avoid memory leaks
            image.close();

            return bitmap;
        }
        return null;
    }

    // A simple conversion method that works with NV21 format (commonly used for YUV).
    private Bitmap convertYUVToBitmap(byte[] yuvData, int width, int height) {
        // Here we can use YuvImage or some external library to handle the conversion.
        // For simplicity, let's assume the image is NV21 (YUV420SP), but you may need a different converter depending on your format.
        android.graphics.YuvImage yuvImage = new android.graphics.YuvImage(yuvData, android.graphics.ImageFormat.NV21, width, height, null);
        ByteArrayOutputStream out = new ByteArrayOutputStream();
        yuvImage.compressToJpeg(new android.graphics.Rect(0, 0, width, height), 100, out);
        byte[] jpegData = out.toByteArray();
        return BitmapFactory.decodeByteArray(jpegData, 0, jpegData.length);
    }
}