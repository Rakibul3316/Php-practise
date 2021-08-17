SOLID Principle

S => Single Responsibility Principle.
(একটা ক্লাস যেন নির্দিষ্ট একটা কাজই করে। একটা অবজেক্ট দিয়ে একটা কাজই করা হোক। একটা single class এর single resposibilty
থাকবে। )

O => Open / Close Principle => Open for extension & close for modification.
(যখন একটা ক্লাস লিখবো এবং ক্লাসটা ঠিকমত রান করছে তখন এর মধ্যে যদি কোন অতিরিক্ত কোন ফিচার দরকার হয় তাহরে ক্লসের কোড কোন
পরিবর্তন করা যাবে না। )

L => Liskov Substitution Principle
(কোন একটা ফাংশন বা ক্লাস বা অবজেক্ট যদি একটা নির্দিষ্ট ধরণের অবজেক্ট নেয় [আর্গুমেন্ট হিসেবে] তাহলে ইচ্ছা করলে ঐ
অবজেক্টটার সাব ক্লাসগুলোও পাস করা যাবে। অথবা একটা অবজেক্ট দিয়ে যদি কোন কাজ হয় তাহলে অবজেক্টর সাব ক্লাস বা child class
দিয়েও সেই একই ধরণের কাজ হবে। অথবা কোন একটা অবজেক্টকে যদি প্যারামিটার হিসেবে পাস করি তাহলে ঐ অবজেক্ট এর সাব ক্লাসগুলোকেও
প্যারামিটার হিসেবে পাস করতে পারবো। )

I => Interface Segregation Principle
(একটা মোনলিখিক [monolithic = একঘেয়ে] ইন্টারফেস না লিখে নির্দিষ্ট কাজের জন্য যার যেটা দরকার সেইটুকু নিয়েই একটা ইন্টারফেস
লেখা উচিত। )

D => Dependency Inversion Principle
(যখন একটা ক্লাস লেখা হবে তখন এর ফাংশনালিটিগুলো abstruction এর উপর নির্ভর করা উচিত। এর application Dependency Injection.
)
