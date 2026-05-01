<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зв'язок з GreenTrend</title>

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background-color: #10180D; color: white; font-family: sans-serif;">

    <section class="contact-section" id="contact" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 50px 0;">
        <div class="container contact-container">
            <div class="form-wrapper" style="background-color: #1A2216; padding: 50px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); max-width: 800px; width: 100%;">
                
                <h2 class="form-title" style="text-align: center; margin-bottom: 40px; font-size: 32px; color: #fff;">Оформлення підписки / Замовлення</h2>
                
                <form id="project-form" class="project-form" style="display: flex; flex-direction: column; gap: 25px;">
                    
                    <div class="form-row" style="display: flex; gap: 30px; flex-wrap: wrap;">
                        <div class="input-group" style="flex: 1; display: flex; flex-direction: column; min-width: 250px;">
                            <label for="name" style="color: #888; font-size: 14px;">Ваше ім'я*</label>
                            <!-- Додали required -->
                            <input type="text" id="name" name="name" placeholder="Наприклад, Олена" required style="background: transparent; border: none; border-bottom: 1px solid #888; color: white; padding: 10px 0; font-size: 16px; outline: none;">
                        </div>
                        <div class="input-group" style="flex: 1; display: flex; flex-direction: column; min-width: 250px;">
                            <label for="email" style="color: #888; font-size: 14px;">Email*</label>
                            <!-- Додали required -->
                            <input type="email" id="email" name="email" value="<?php echo isset($_GET['user_email']) ? htmlspecialchars($_GET['user_email']) : ''; ?>" placeholder="ваша.пошта@gmail.com" required style="background: transparent; border: none; border-bottom: 1px solid #888; color: white; padding: 10px 0; font-size: 16px; outline: none;">
                        </div>
                    </div>

                    <div class="input-group full-width" style="display: flex; flex-direction: column;">
                        <label for="location" style="color: #888; font-size: 14px;">Місто та адреса доставки</label>
                        <!-- Тут required не ставимо, бо це поле без зірочки (необов'язкове) -->
                        <input type="text" id="location" name="location" placeholder="Київ, відділення НП №1" style="background: transparent; border: none; border-bottom: 1px solid #888; color: white; padding: 10px 0; font-size: 16px; outline: none;">
                    </div>

                    <div class="form-row" style="display: flex; gap: 30px; flex-wrap: wrap;">
                        <div class="input-group" style="flex: 1; display: flex; flex-direction: column; min-width: 250px;">
                            <label for="budget" style="color: #888; font-size: 14px;">Бюджет (грн)*</label>
                            <!-- Додали required -->
                            <input type="text" id="budget" name="budget" placeholder="Наприклад, 500 грн" required style="background: transparent; border: none; border-bottom: 1px solid #888; color: white; padding: 10px 0; font-size: 16px; outline: none;">
                        </div>
                        <div class="input-group" style="flex: 1; display: flex; flex-direction: column; min-width: 250px;">
                            <label for="subject" style="color: #888; font-size: 14px;">Тема звернення*</label>
                            <!-- Додали required -->
                            <input type="text" id="subject" name="subject" placeholder="Співпраця / Регулярна підписка" required style="background: transparent; border: none; border-bottom: 1px solid #888; color: white; padding: 10px 0; font-size: 16px; outline: none;">
                        </div>
                    </div>

                    <div class="input-group full-width" style="display: flex; flex-direction: column;">
                        <label for="message" style="color: #888; font-size: 14px;">Коментар до замовлення*</label>
                        <!-- Додали required -->
                        <textarea id="message" name="message" rows="4" placeholder="Які саме паростки вас цікавлять? (Горох, базилік, редис...)" required style="background: transparent; border: none; border-bottom: 1px solid #888; color: white; padding: 10px 0; font-size: 16px; outline: none;"></textarea>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 10px; flex-wrap: wrap; gap: 15px;">
                        <button type="submit" class="btn-submit" style="background-color: #28a745; color: white; border: none; padding: 15px 40px; font-size: 16px; font-weight: bold; border-radius: 8px; cursor: pointer; transition: 0.3s;">Відправити ▷</button>
                        <a href="index.php" style="color: #888; text-decoration: none; font-size: 14px; transition: color 0.3s;" onmouseover="this.style.color='#28a745'" onmouseout="this.style.color='#888'">← Повернутися на головну</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Підключаємо скрипт -->
    <script src="assets/js/script.js"></script>
</body>
</html>