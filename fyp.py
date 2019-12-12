import RPi.GPIO as GPIO
import time
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BOARD)
GPIO.setup(5,GPIO.OUT)
GPIO.setup(7,GPIO.OUT)
GPIO.setup(8,GPIO.OUT)
GPIO.setup(10,GPIO.OUT)
GPIO.setup(12,GPIO.OUT)
true = 1
pins = [5, 7, 8, 10, 12]
while(true):
        from urllib.request import urlopen
        data = urlopen("https://fyp-pravinvincible.c9users.io/buttonStatus.php");
        status = data.read();
        status = status.decode('utf-8')
        output = status.split()
        print ("Time : %s" % time.ctime())
        for i in range(len(output)):
            if output[i] == 'ON':
                            GPIO.output(pins[i],True)
                            print("true")
            elif output[i] == 'OFF':
                            GPIO.output(pins[i],False)
                            print("false")
        time.sleep(5)

