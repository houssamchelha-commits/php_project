<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulaire — Houssam Chelha</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
:root {
  --bg-main:#37353E;
  --bg-secondary:#44444E;
  --accent:#715A5A;
  --accent-light:#9a7a7a;
  --text-light:#D3DAD9;
  --text-dim:#9ba5a4;
  --border:rgba(211,218,217,0.08);
}

body{
  margin:0;
  font-family:'Outfit',sans-serif;
  background:var(--bg-main);
  color:var(--text-light);
}

/* NAVBAR */
.navbar{
  height:70px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:0 40px;
  background:#37353E;
  border-bottom:1px solid var(--border);
}
.navbar a{
  color:var(--text-dim);
  text-decoration:none;
  margin-left:20px;
}
.navbar a:hover{color:white}

/* SECTION */
.container{
  max-width:800px;
  margin:80px auto;
  padding:20px;
}

/* CARD */
.card{
  background:var(--bg-secondary);
  padding:30px;
  border-radius:12px;
  border:1px solid var(--border);
}

/* TITLE */
h2{
  margin-bottom:20px;
}

/* INPUTS */
input[type="text"],
input[type="date"]{
  width:100%;
  padding:10px;
  margin-top:5px;
  margin-bottom:15px;
  border-radius:6px;
  border:1px solid var(--border);
  background:var(--bg-main);
  color:white;
}

input:focus{
  outline:none;
  border-color:var(--accent-light);
}

/* CHECKBOX & RADIO */
label{
  display:block;
  margin-bottom:8px;
  color:var(--text-dim);
}

/* BUTTON */
button{
  background:var(--accent);
  color:white;
  padding:10px 20px;
  border:none;
  border-radius:6px;
  cursor:pointer;
}
button:hover{
  background:var(--accent-light);
}

/* RESULT */
.result{
  margin-top:25px;
  padding:15px;
  background:#2f2d35;
  border-left:4px solid var(--accent);
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Press+Start+2P&display=swap');

:root {
  --color-bg: #050A1B;
  --color-bg-secondary: #080F28;
  --color-surface: #102750;
  --color-surface-hover: #153464;
  --color-primary: #F02AD6;
  --color-primary-hover: #FF43E8;
  --color-blue: #0878F9;
  --color-cyan: #16C8FF;
  --color-purple: #8956F6;
  --color-text: #F5F7FF;
  --color-text-secondary: #D5DEFA;
  --color-text-muted: #8EA4D4;
  --color-disabled: #52658D;
  --color-border: rgba(21, 52, 100, 0.8);
  --color-border-active: #0878F9;
  --shadow-blue: 0 0 20px rgba(8, 120, 249, 0.18);
  --shadow-pink: 0 0 20px rgba(240, 42, 214, 0.18);
  --radius-sm: 6px;
  --radius-md: 10px;
  --radius-lg: 16px;

  --bg-main: var(--color-bg);
  --bg-secondary: rgba(8, 15, 40, 0.68);
  --accent: var(--color-primary);
  --accent-light: var(--color-cyan);
  --text-light: var(--color-text);
  --text-dim: var(--color-text-secondary);
  --text-muted: var(--color-text-muted);
  --border: rgba(22, 200, 255, 0.2);
  --border-hover: rgba(8, 120, 249, 0.7);
  --shadow-sm: 0 4px 18px rgba(5, 10, 27, 0.3);
  --shadow-md: 0 8px 28px rgba(8, 120, 249, 0.12);
  --shadow-lg: 0 16px 48px rgba(5, 10, 27, 0.45);
  --font-serif: 'Press Start 2P', monospace;
  --font-mono: 'Inter', sans-serif;
  --font-sans: 'Inter', sans-serif;
}

* {
  cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='20' viewBox='0 0 16 20' shape-rendering='crispEdges'%3E%3Cpath fill='%23050A1B' d='M1 1h2v2h2v2h2v2h2v2h2v2h3v2h-2v2h-2v5H8v-5H6v-2H4v-2H3v-2H2V8H1z'/%3E%3Cpath fill='%23F02AD6' d='M3 4h2v2h2v2h2v2h3v2h-2v2H9v5H8v-5H6v-2H5v-2H4v-2H3z'/%3E%3C/svg%3E") 1 1, auto;
}

body {
  min-height: 100vh;
  background-color: var(--color-bg) !important;
  background-image:
    radial-gradient(ellipse at 12% 8%, rgba(8, 120, 249, 0.13), transparent 38%),
    radial-gradient(ellipse at 88% 22%, rgba(137, 86, 246, 0.1), transparent 34%) !important;
  color: var(--color-text-secondary) !important;
  font-family: 'Inter', Arial, sans-serif !important;
}

body::before {
  content: '';
  position: fixed;
  inset: 0;
  z-index: -1;
  pointer-events: none;
  opacity: 0.22;
  background-image: radial-gradient(rgba(22, 200, 255, 0.22) 0.7px, transparent 0.7px);
  background-size: 24px 24px;
}

h1, h2, h3, h4, .section-title, .nav-logo, .logo, .footer-logo {
  color: var(--color-text) !important;
  font-family: 'Press Start 2P', monospace !important;
  font-size: clamp(0.68rem, 1.35vw, 0.95rem) !important;
  line-height: 1.8 !important;
  letter-spacing: 0.02em;
}

p, li, label, input, button, a, .section-tag, .resource-desc {
  font-family: 'Inter', Arial, sans-serif;
}

.section-tag, .hero-eyebrow, .name-last, .price, .total {
  color: var(--color-primary) !important;
}

h1.hero-name {
  font-size: clamp(1.2rem, 4vw, 2.4rem) !important;
}

.nav-logo, .logo, .footer-logo {
  color: var(--color-primary) !important;
}

.nav-links a:hover, .nav-links a:focus-visible {
  color: var(--color-cyan) !important;
}

.nav-links a::after {
  background: var(--color-cyan) !important;
}

:focus-visible {
  outline: 2px solid var(--color-cyan);
  outline-offset: 3px;
}

a {
  color: var(--color-cyan);
  transition: color 0.2s ease, border-color 0.2s ease, background-color 0.2s ease;
}

a:hover {
  color: var(--color-primary-hover);
}

button, input[type="submit"], input[type="button"], .btn-primary, .back {
  border: 1px solid var(--color-primary-hover) !important;
  border-radius: 8px !important;
  background: var(--color-primary) !important;
  color: var(--color-bg) !important;
  font-weight: 700 !important;
  transition: background 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease !important;
}

button:hover, input[type="submit"]:hover, input[type="button"]:hover, .btn-primary:hover, .back:hover {
  background: var(--color-primary-hover) !important;
  box-shadow: 0 0 18px rgba(240, 42, 214, 0.3) !important;
}

.btn-ghost, .btn-secondary {
  border: 1px solid var(--color-blue) !important;
  background: rgba(16, 39, 80, 0.65) !important;
  color: var(--color-cyan) !important;
}

.btn-ghost:hover, .btn-secondary:hover {
  border-color: var(--color-cyan) !important;
  background: var(--color-surface-hover) !important;
}

input:not([type="checkbox"]):not([type="radio"]):not([type="hidden"]),
textarea,
select {
  border: 1px solid rgba(22, 200, 255, 0.28) !important;
  border-radius: 8px !important;
  background: rgba(5, 10, 27, 0.48) !important;
  color: var(--color-text) !important;
  font-family: 'Inter', Arial, sans-serif !important;
}

input::placeholder, textarea::placeholder {
  color: var(--color-text-muted) !important;
}

input:focus, textarea:focus, select:focus {
  outline: 2px solid rgba(22, 200, 255, 0.28) !important;
  border-color: var(--color-cyan) !important;
}

input[type="checkbox"], input[type="radio"] {
  accent-color: var(--color-primary);
}

header, .navbar {
  border-bottom: 1px solid var(--color-border) !important;
  background: rgba(8, 15, 40, 0.76) !important;
  color: var(--color-text-secondary) !important;
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
}

section, .section, .about, .section-alt {
  background-color: transparent !important;
}

.about-card, .skill-card, .timeline-card, .project-card, .axis-card,
[class$="-card"], .exercise-item, .card, .login-box, body > .container,
.container > .card, .result, .item, .empty {
  border: 1px solid rgba(22, 200, 255, 0.2) !important;
  border-radius: var(--radius-lg) !important;
  background: rgba(8, 15, 40, 0.56) !important;
  box-shadow: 0 8px 28px rgba(5, 10, 27, 0.22) !important;
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
}

.about-card:hover, .skill-card:hover, .timeline-card:hover, .project-card:hover,
.axis-card:hover, .resource-card:hover, .card:hover {
  border-color: var(--color-blue) !important;
  box-shadow: var(--shadow-blue) !important;
}

.resource-card, .project-card {
  color: var(--color-text-secondary) !important;
}

.resource-icon, .avatar-initials, .cart {
  border-color: rgba(22, 200, 255, 0.4) !important;
  background-color: rgba(16, 39, 80, 0.72) !important;
  color: var(--color-cyan) !important;
}

.resource-arrow, .meta-label, .empty {
  color: var(--color-text-muted) !important;
}

.method-tag, .badge {
  border: 1px solid rgba(137, 86, 246, 0.55);
  border-radius: 6px;
  background: rgba(137, 86, 246, 0.18);
  color: #C4A9FF;
}

.result {
  border-left: 4px solid var(--color-primary) !important;
  color: var(--color-text-secondary) !important;
}

.logout, .remove {
  border: 1px solid var(--color-primary-hover) !important;
  background: rgba(240, 42, 214, 0.18) !important;
  color: var(--color-text) !important;
}

.error {
  border: 1px solid rgba(240, 42, 214, 0.4) !important;
  background: rgba(240, 42, 214, 0.12) !important;
  color: var(--color-text) !important;
}

.hero-glow {
  background: radial-gradient(ellipse, rgba(8, 120, 249, 0.2) 0%, transparent 70%) !important;
}

form {
  background: transparent;
}

table {
  color: var(--color-text-secondary);
}

td, th {
  border-color: rgba(22, 200, 255, 0.3) !important;
}

tr:nth-child(even) {
  background: rgba(8, 15, 40, 0.72) !important;
}

tr:nth-child(odd) {
  background: rgba(16, 39, 80, 0.55) !important;
}

::-webkit-scrollbar { width: 8px; }
::-webkit-scrollbar-track { background: var(--color-bg); }
::-webkit-scrollbar-thumb { background: var(--color-blue); border: 2px solid var(--color-bg); }

@media (max-width: 600px) {
  body > .container {
    width: calc(100% - 2rem) !important;
    padding: 1.25rem !important;
  }
}

@media (prefers-reduced-motion: reduce) {
  *, *::before, *::after {
    scroll-behavior: auto !important;
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}

</style>
</head>

<body>

<div class="navbar">
  <div><strong>Chelha Houssam</strong></div>
  <div>
    <a href="index.php">Accueil</a>
  </div>
</div>

<div class="container">
  <div class="card">

    <h2>Formulaire d'inscription</h2>

    <form method="post">

      <label>Numéro</label>
      <input type="text" name="num" required>

      <label>Nom</label>
      <input type="text" name="nom" required>

      <label>Prénom</label>
      <input type="text" name="prenom" required>

      <label>Date de naissance</label>
      <input type="date" name="date_naissance" required>

      <label>Loisirs</label>
      <label><input type="checkbox" name="loisirs[]" value="Sport"> Sport</label>
      <label><input type="checkbox" name="loisirs[]" value="Lecture"> Lecture</label>
      <label><input type="checkbox" name="loisirs[]" value="Musique"> Musique</label>

      <br>

      <label>Sexe</label>
      <label><input type="radio" name="sexe" value="Homme" required> Homme</label>
      <label><input type="radio" name="sexe" value="Femme" required> Femme</label>

      <br><br>

      <button type="submit">S'inscrire</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date_naissance = $_POST["date_naissance"];
        $sexe = $_POST["sexe"];

        if (isset($_POST["loisirs"])) {
            $loisirs = implode(", ", $_POST["loisirs"]);
        } else {
            $loisirs = "Aucun";
        }

        echo "<div class='result'>";
        echo "<h3>Informations saisies</h3>";
        echo "Numéro : $num <br>";
        echo "Nom : $nom <br>";
        echo "Prénom : $prenom <br>";
        echo "Date de naissance : $date_naissance <br>";
        echo "Loisirs : $loisirs <br>";
        echo "Sexe : $sexe <br>";
        echo "</div>";
    }
    ?>

  </div>
</div>

</body>
</html>