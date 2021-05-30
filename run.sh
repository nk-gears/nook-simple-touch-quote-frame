
./gradlew assembleDebug
adb uninstall com.nkdews.quoteframe
adb install /Users/garden/Downloads/ReLaunchX-master/app/build/outputs/apk/app-debug.apk
adb shell am start -n  com.nkdews.quoteframe/.ElectricSignActivity