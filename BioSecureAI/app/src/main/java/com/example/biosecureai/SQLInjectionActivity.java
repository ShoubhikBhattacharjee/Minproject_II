package com.example.biosecureai;

import android.content.ContentValues;
import android.database.Cursor;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;
import android.os.Bundle;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;

public class SQLInjectionActivity extends AppCompatActivity {

    private EditText etUsername, etPassword;
    private Button btnInsecureLogin, btnSecureLogin;
    private TextView tvResult;
    private SQLiteDatabase database;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sql_injection);

        // Initialize UI components
        etUsername = findViewById(R.id.et_username);
        etPassword = findViewById(R.id.et_password);
        btnInsecureLogin = findViewById(R.id.btn_insecure_login);
        btnSecureLogin = findViewById(R.id.btn_secure_login);
        tvResult = findViewById(R.id.tv_result);

        // Initialize database
        database = openOrCreateDatabase("users.db", MODE_PRIVATE, null);
        setupDatabase();

        // Vulnerable login
        btnInsecureLogin.setOnClickListener(v -> performInsecureLogin());

        // Secure login
        btnSecureLogin.setOnClickListener(v -> performSecureLogin());
    }

    private void setupDatabase() {
        // Create a table
        database.execSQL("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, password TEXT)");

        // Insert dummy data
        ContentValues values = new ContentValues();
        values.put("username", "admin");
        values.put("password", "password123");
        database.insert("users", null, values);

        values.put("username", "user");
        values.put("password", "123456");
        database.insert("users", null, values);
    }

    private void performInsecureLogin() {
        String username = etUsername.getText().toString();
        String password = etPassword.getText().toString();

        // Vulnerable query
        String query = "SELECT * FROM users WHERE username = '" + username + "' AND password = '" + password + "'";
        try (Cursor cursor = database.rawQuery(query, null)) {
            if (cursor.moveToFirst()) {
                tvResult.setText("Login Successful! Welcome, " + username);
            } else {
                tvResult.setText("Login Failed! Invalid credentials.");
            }
        } catch (SQLException e) {
            tvResult.setText("Error: " + e.getMessage());
        }
    }

    private void performSecureLogin() {
        String username = etUsername.getText().toString();
        String password = etPassword.getText().toString();

        // Secure query
        String query = "SELECT * FROM users WHERE username = ? AND password = ?";
        try (Cursor cursor = database.rawQuery(query, new String[]{username, password})) {
            if (cursor.moveToFirst()) {
                tvResult.setText("Login Successful! Welcome, " + username);
            } else {
                tvResult.setText("Login Failed! Invalid credentials.");
            }
        } catch (SQLException e) {
            tvResult.setText("Error: " + e.getMessage());
        }
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        if (database != null) {
            database.close();
        }
    }
}