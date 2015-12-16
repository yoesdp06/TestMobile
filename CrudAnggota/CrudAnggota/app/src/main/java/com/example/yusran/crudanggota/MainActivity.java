package com.example.yusran.crudanggota;

import android.content.Intent;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.Button;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity implements View.OnClickListener {
    TextView lRegister;
    Button bLogin;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        bLogin = (Button) findViewById(R.id.bLogin);
        bLogin.setOnClickListener(this);
        lRegister = (TextView) findViewById(R.id.lRegister);
              lRegister.setOnClickListener(this);


    }
    @Override
        public void onClick(View v){
        switch (v.getId())
        {

            case R.id.lRegister :
                startActivity(new Intent(this, Register.class));
                break;

            case R.id.bLogin :
                startActivity(new Intent(this, TamData.class));
                break;


        }
    }

}
