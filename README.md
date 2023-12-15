### Волонтерський проєкт зі створення сайту ГО «Всеукраїнська організація "Клас"»

<div style="display: flex; justify-content: center;">
<img src="./src/images/screenshot_site.png" alt="скріншот сайту">
</div>

### Команда розробників 🚀

<div style="display: flex; margin-bottom: 20px">

<a  href="https://github.com/OlgaSmile">![GitHub](https://img.shields.io/badge/-Olha_Smilichenko-05122A?style=flat&logo=github)</a> <a  href="https://github.com/TanyaFedorenko">![GitHub](https://img.shields.io/badge/-Tetiana_Fedorenko-05122A?style=flat&logo=github)</a> <a  href="https://github.com/Yevhenii2022">![GitHub](https://img.shields.io/badge/-Yevhenii_Lytvynenko-05122A?style=flat&logo=github)</a> <a  href="https://github.com/litvinenkoiryna">![GitHub](https://img.shields.io/badge/-Iryna_Lytvynenko-05122A?style=flat&logo=github)</a> <a  href="https://github.com/dianaforost">![GitHub](https://img.shields.io/badge/-Diana_Forostiana-05122A?style=flat&logo=github)</a>

</div>

1. Склонувати репозиторій в папку themes
2. Перейти в тему і встановити залежності npm install
3. Створити та перейти на нову гілку git (назвою гілки може бути назва сторінки)

Створення нового шаблона сторінки

1. В папці templates створюємо новий файл шаблону сторінки
2. src/styles/template-styles створюємо новий файл для стилів цієї сторінки
3. src/scripts/template-scripts створюємо новий файл для скриптів цієї сторінки
4. Підключаємо ці 2 файли в functions.php з умовою відображення тільки для цього шаблона
5. Запускаємо Gulp командою Gulp
6. Створюємо в адмінці нову сторінку і обираємо для неї створений шаблон

Всі глобальні стилі знаходяться у файлах папки src/styles і підключаються в файлі main.scss. Так само і скрипти (src/scripts). Редагувати файли глобальних стилів і скриптів можна лише з узгодженням з іншими членами команди проекту!!!

Після завершення розробки робиться push гілки на git та pull request в гілку main
