
#./gradlew assembleRelease
adb uninstall com.nkdews.quoteframe
adb install /Users/garden/Downloads/ReLaunchX-master/app/build/outputs/apk/app-release.apk
adb shell am start -n  com.nkdews.quoteframe/.ElectricSignActivity