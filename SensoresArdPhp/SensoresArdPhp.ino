#include "DHT.h"
#include <Wire.h> //-- 

#define DHTPIN 2     // what pin we're connected to

#define DHTTYPE DHT11   // DHT 11 

// Initialize DHT sensor for normal 16mhz Arduino
DHT dht(DHTPIN, DHTTYPE);

int pinoSensorUmidade = A0; //Analogico 0 para o pino do sensor de Chuva
int  valorSensor = 0; // Variável do pino analógica A0 do sinal vindo do sensor
char const* LeituraChuva = "";

void setup() {
  Serial.begin(9600); 
  Serial.println("Sensores de Umidade Relativa do Ar, Temperatura e Variação Climática!");
 
  dht.begin();
}

void loop() {
  // Wait a few seconds between measurements.
  delay(5000);

  // Reading temperature or humidity takes about 250 milliseconds!
  // Sensor readings may also be up to 2 seconds 'old' (its a very slow sensor)
  float h = dht.readHumidity();
  // Read temperature as Celsius
  float t = dht.readTemperature();
  // Read temperature as Fahrenheit
  float f = dht.readTemperature(true);
  
  // Check if any reads failed and exit early (to try again).
  if (isnan(h) || isnan(t) || isnan(f)) {
    Serial.println("Falha na leitura do Sensor DHT!");
    return;
  }

  // Compute heat index
  // Must send in temp in Fahrenheit!
  float hi = dht.computeHeatIndex(f, h);

   // Lê o valor do sensor e armazena em sensorValue
  valorSensor = analogRead(pinoSensorUmidade); 
    
  //Verifica qual é o valor e
  //imprime na Serial o valor e Status 
  if(valorSensor > 800){
    //Seco
    LeituraChuva = "Seco";
    
  }else if(valorSensor <=800 && valorSensor > 500 ){
    //Leve Chuva
    LeituraChuva = "Chuva Fina";
  
  }else if (valorSensor <= 500){
     //Chuva Forte
     LeituraChuva = "Chuva Forte";
  } 
        
  
  Serial.print(h);
  Serial.print("%");
  Serial.print("|");
  Serial.print(t);
  Serial.print("ºC");
  Serial.print("|");
  Serial.println(LeituraChuva);
  
}
