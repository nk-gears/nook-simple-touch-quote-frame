
adb shell sendevent /dev/input/event0 1 158 1 # 0001 009e 00000001
adb shell sendevent /dev/input/event0 0 0 0 #0000 0000 00000000
adb shell sendevent /dev/input/event0 1 158 0 #0001 009e 00000000
adb shell sendevent /dev/input/event0 0 0 0 # 0000 0000 00000000

