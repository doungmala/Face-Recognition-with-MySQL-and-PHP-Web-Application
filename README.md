# Face-Recognition-with-MySQL-and-PHP-Web-Application

โปรเจกต์นี้เป็นการพัฒนาระบบจดจำใบหน้า (Face Recognition) โดยใช้ Python (OpenCV) สำหรับประมวลผลและเทรนโมเดลใบหน้า พร้อมทั้งเชื่อมต่อฐานข้อมูล MySQL และมีส่วนติดต่อผู้ใช้งานผ่านเว็บแอปพลิเคชันภาษา PHP   

โครงสร้างโปรเจกต์ (Project Structure)

ภายในโปรเจกต์ประกอบด้วยโฟลเดอร์และไฟล์หลัก ๆ ดังนี้:   

1. โฟลเดอร์สำคัญ (Directories)

opencv-files/: โฟลเดอร์เก็บไฟล์ไลบรารีหรือโมเดลตั้งต้นของ OpenCV (เช่น ไฟล์ Haar Cascades สำหรับตรวจจับใบหน้า)   

output/: โฟลเดอร์สำหรับเก็บผลลัพธ์จากการประมวลผล เช่น ภาพที่บันทึกหรือไฟล์ล็อกผลลัพธ์   

test-data/: โฟลเดอร์สำหรับเก็บภาพหรือชุดข้อมูลทดสอบระบบ   

training-data/: โฟลเดอร์สำหรับเก็บภาพใบหน้าบุคคลเพื่อใช้ในการเทรนโมเดล (Training Dataset)   

visualization/: โฟลเดอร์สำหรับเก็บกราฟ สถิติ หรือภาพแสดงผลการวิเคราะห์ของระบบ   

web php/: โฟลเดอร์สำหรับเก็บซอร์สโค้ดเว็บแอปพลิเคชัน PHP (หน้าเว็บไซต์, ระบบเชื่อมต่อฐานข้อมูล MySQL, หน้าจัดการข้อมูล)   

2. ไฟล์สคริปต์หลัก (Python Scripts)

test_video.py: สคริปต์สำหรับทดสอบระบบจดจำใบหน้าผ่านไฟล์วิดีโอหรือกล้องเว็บแคมแบบเรียลไทม์   

testsql.py: สคริปต์สำหรับทดสอบการเชื่อมต่อและการรับ-ส่งข้อมูลระหว่างระบบ Python กับฐานข้อมูล MySQL   

ความต้องการของระบบ (Prerequisites)

Python 3.x พร้อมไลบรารีที่เกี่ยวข้อง (เช่น OpenCV, NumPy)

PHP และเว็บเซิร์ฟเวอร์ (เช่น XAMPP, WampServer)

MySQL Database สำหรับจัดเก็บข้อมูลผู้ใช้หรือบันทึกประวัติการจดจำใบหน้า

*****************************************************************************

Name : Patasu Daungmala

Position : R&D Manager

Tel : 0641900551

E-mail : nextsoftware.pp@gmail.com

Line : https://lin.ee/THH8PAt

Medium : https://dr-pathasu-doung.medium.com

Github : https://github.com/doungmala

Website : https://nextsoftwarethailand.com, https://autoworks24.com

Linkedin : https://linkedin.com/in/patasu-doungmala-7b90a2205

​
บริษัท เน็กซ์ ซอฟต์แวร์ จำกัด 

ที่อยู่ หมู่บ้าน inizio เลขที่ 888/257 ถนนมะลิวัลย์ ตำบลบ้านทุ่ม อำเภอเมืองขอนแก่น จังหวัดขอนแก่น 40000 เลขที่ผู้เสียภาษี : 0405558003118

ผลงานและประวัติการทำงาน

สามารถดูผลงานและประวัติการทำงานได้ที่

AI, Image Processing : https://www.dropbox.com/scl/fi/tskimhifw0hlcdea5e8t8/Next-Software-2026.pdf?rlkey=f26k2b7t69doklzwxyx54qsmh&dl=0

IoT : https://www.dropbox.com/scl/fi/a5mj4ucjotjv4xrh6sh9q/NS_IOT2025.pdf?rlkey=t0cwl0l4b81w73do2drhqqjp0&dl=0

SEO, Website : https://www.dropbox.com/scl/fi/4q811q0s88xtd8usf5e25/WEB-DEVELOPER-SEARCH-ENGINE-OPTIMIZATION.pdf?rlkey=nvqvndrxv7v9yrfmlcgtplmtx&dl=0

Affiliated companies : https://www.dropbox.com/scl/fi/y98k95g24x44511iyhdih/Affiliated-companies.pdf?rlkey=mf1z7lr6q5x58ee2nonmgnz8r&dl=0
