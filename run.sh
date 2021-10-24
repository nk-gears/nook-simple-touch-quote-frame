
./gradlew assembleRelease
adb uninstall com.nkdews.quoteframe
adb install /Users/Nirmal/projects/appdews/nook-simple-touch-quote-frame/app/build/outputs/apk/app-release.apk
adb shell am start -n  com.nkdews.quoteframe/.ElectricSignActivity