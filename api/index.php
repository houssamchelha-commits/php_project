<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Houssam Chelha — Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=DM+Mono:wght@300;400;500&family=Outfit:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    :root {
  --bg-main:     #37353E;
  --bg-secondary:#44444E;
  --accent:      #715A5A;
  --accent-light:#9a7a7a;
  --text-light:  #D3DAD9;
  --text-dim:    #9ba5a4;
  --text-muted:  #6b7878;
  --border:      rgba(211,218,217,0.08);
  --border-hover:rgba(113,90,90,0.5);
  --shadow-sm:   0 2px 12px rgba(0,0,0,0.3);
  --shadow-md:   0 8px 32px rgba(0,0,0,0.4);
  --shadow-lg:   0 20px 60px rgba(0,0,0,0.5);
  --radius-sm:   6px;
  --radius-md:   12px;
  --radius-lg:   20px;
  --font-serif:  'Cormorant Garamond', Georgia, serif;
  --font-mono:   'DM Mono', 'Courier New', monospace;
  --font-sans:   'Outfit', sans-serif;
  --nav-h:       68px;
  --transition:  0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* --- RESET & BASE --- */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

html { scroll-behavior: smooth; scroll-padding-top: var(--nav-h); }

body {
  font-family: var(--font-sans);
  background: var(--bg-main);
  color: var(--text-light);
  line-height: 1.7;
  overflow-x: hidden;
}

a { text-decoration: none; color: inherit; }
ul { list-style: none; }
strong { color: var(--text-light); font-weight: 600; }

img, svg { display: block; }

/* --- SCROLLBAR --- */
::-webkit-scrollbar { width: 5px; }
::-webkit-scrollbar-track { background: var(--bg-main); }
::-webkit-scrollbar-thumb { background: var(--accent); border-radius: 10px; }

/* --- TYPOGRAPHY --- */
.section-title {
  font-family: var(--font-serif);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 300;
  letter-spacing: -0.02em;
  color: var(--text-light);
  line-height: 1.1;
}

.section-tag {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--accent-light);
  display: block;
  margin-bottom: 0.8rem;
}

/* --- LAYOUT --- */
.container {
  max-width: 1100px;
  margin: 0 auto;
  padding: 0 clamp(1.2rem, 5vw, 3rem);
}

.section {
  padding: clamp(5rem, 10vw, 8rem) 0;
}

.section-header {
  margin-bottom: clamp(2.5rem, 5vw, 4rem);
}

/* =========================================
   NAVBAR
   ========================================= */
.navbar {
  position: fixed;
  top: 0; left: 0; right: 0;
  height: var(--nav-h);
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 clamp(1.2rem, 5vw, 3rem);
  background: rgba(55, 53, 62, 0.85);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border-bottom: 1px solid var(--border);
  transition: background var(--transition), box-shadow var(--transition);
}

.navbar.scrolled {
  background: rgba(55, 53, 62, 0.97);
  box-shadow: var(--shadow-md);
}

.nav-logo {
  font-family: var(--font-serif);
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-light);
  letter-spacing: 0.05em;
  cursor: default;
}

.nav-links {
  display: flex;
  gap: 2.2rem;
  align-items: center;
}

.nav-links a {
  font-family: var(--font-sans);
  font-size: 0.85rem;
  font-weight: 400;
  color: var(--text-dim);
  letter-spacing: 0.04em;
  transition: color var(--transition);
  position: relative;
  padding-bottom: 2px;
}

.nav-links a::after {
  content: '';
  position: absolute;
  bottom: -2px; left: 0;
  width: 0; height: 1px;
  background: var(--accent-light);
  transition: width var(--transition);
}

.nav-links a:hover { color: var(--text-light); }
.nav-links a:hover::after { width: 100%; }

.nav-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 4px;
}
.nav-toggle span {
  display: block;
  width: 24px; height: 1.5px;
  background: var(--text-light);
  transition: transform var(--transition), opacity var(--transition);
}
.nav-toggle.active span:nth-child(1) { transform: translateY(6.5px) rotate(45deg); }
.nav-toggle.active span:nth-child(2) { opacity: 0; }
.nav-toggle.active span:nth-child(3) { transform: translateY(-6.5px) rotate(-45deg); }

/* =========================================
   BUTTONS
   ========================================= */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  padding: 0.75rem 1.75rem;
  border-radius: var(--radius-sm);
  font-family: var(--font-sans);
  font-size: 0.88rem;
  font-weight: 500;
  letter-spacing: 0.02em;
  cursor: pointer;
  border: none;
  transition: transform var(--transition), box-shadow var(--transition), background var(--transition), color var(--transition);
  white-space: nowrap;
}

.btn svg { width: 16px; height: 16px; flex-shrink: 0; }

.btn-primary {
  background: var(--accent);
  color: var(--text-light);
  box-shadow: 0 4px 18px rgba(113,90,90,0.35);
}
.btn-primary:hover {
  background: var(--accent-light);
  transform: translateY(-2px);
  box-shadow: 0 8px 28px rgba(113,90,90,0.5);
}
.btn-primary:active { transform: translateY(0); }

.btn-ghost {
  background: transparent;
  color: var(--text-dim);
  border: 1px solid var(--border-hover);
}
.btn-ghost:hover {
  background: rgba(113,90,90,0.1);
  color: var(--text-light);
  border-color: var(--accent-light);
  transform: translateY(-2px);
}

.btn-sm { padding: 0.55rem 1.2rem; font-size: 0.82rem; }
.btn-full { width: 100%; justify-content: center; }

/* =========================================
   HERO
   ========================================= */
.hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  padding: var(--nav-h) 1.2rem 0;
}

.hero-noise {
  position: absolute;
  inset: 0;
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
  pointer-events: none;
  opacity: 0.5;
}

.hero-glow {
  position: absolute;
  top: 20%; left: 50%;
  transform: translate(-50%, -50%);
  width: 600px; height: 400px;
  background: radial-gradient(ellipse, rgba(113,90,90,0.15) 0%, transparent 70%);
  pointer-events: none;
}

.hero-content {
  position: relative;
  z-index: 1;
  text-align: center;
  max-width: 720px;
  animation: heroFadeIn 1s ease both;
}

@keyframes heroFadeIn {
  from { opacity: 0; transform: translateY(30px); }
  to   { opacity: 1; transform: translateY(0); }
}

.hero-eyebrow {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  letter-spacing: 0.3em;
  text-transform: uppercase;
  color: var(--accent-light);
  margin-bottom: 1.5rem;
  animation: heroFadeIn 1s 0.1s ease both;
}

.hero-name {
  font-family: var(--font-serif);
  font-size: clamp(3.5rem, 9vw, 7rem);
  font-weight: 300;
  line-height: 0.95;
  letter-spacing: -0.03em;
  margin-bottom: 1rem;
  animation: heroFadeIn 1s 0.2s ease both;
}

.name-first {
  display: block;
  color: var(--text-light);
}
.name-last {
  display: block;
  color: var(--accent-light);
  font-style: italic;
}

.hero-title {
  font-family: var(--font-mono);
  font-size: clamp(0.8rem, 2vw, 1rem);
  color: var(--text-dim);
  letter-spacing: 0.12em;
  text-transform: uppercase;
  margin-bottom: 1.5rem;
  animation: heroFadeIn 1s 0.3s ease both;
}

.hero-intro {
  font-size: clamp(1rem, 2.2vw, 1.15rem);
  color: var(--text-dim);
  line-height: 1.8;
  margin-bottom: 2.5rem;
  animation: heroFadeIn 1s 0.4s ease both;
}

.hero-actions {
  display: flex;
  gap: 1rem;
  justify-content: center;
  flex-wrap: wrap;
  animation: heroFadeIn 1s 0.5s ease both;
}

.hero-scroll-hint {
  position: absolute;
  bottom: 2.5rem;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.6rem;
  font-family: var(--font-mono);
  font-size: 0.65rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--text-muted);
  animation: heroFadeIn 1s 1s ease both;
}

.scroll-line {
  width: 1px;
  height: 48px;
  background: linear-gradient(to bottom, var(--accent-light), transparent);
  animation: scrollPulse 2s ease-in-out infinite;
}
@keyframes scrollPulse {
  0%, 100% { opacity: 0.4; transform: scaleY(1); }
  50%       { opacity: 1;   transform: scaleY(1.1); }
}

/* =========================================
   ABOUT
   ========================================= */
.about { background: var(--bg-secondary); }

.about-grid {
  display: grid;
  grid-template-columns: 280px 1fr;
  gap: 4rem;
  align-items: start;
}

.about-card {
  background: var(--bg-main);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 2rem;
  text-align: center;
  position: relative;
  transition: border-color var(--transition), box-shadow var(--transition);
}
.about-card:hover {
  border-color: var(--border-hover);
  box-shadow: var(--shadow-md);
}

.about-avatar {
  position: relative;
  width: 100px; height: 100px;
  margin: 0 auto 1.5rem;
}

.avatar-initials {
  width: 100px; height: 100px;
  border-radius: 50%;
  background: var(--accent);
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: var(--font-serif);
  font-size: 2rem;
  font-weight: 600;
  color: var(--text-light);
  position: relative;
  z-index: 1;
}

.avatar-ring {
  position: absolute;
  inset: -4px;
  border-radius: 50%;
  border: 1px solid var(--accent);
  opacity: 0.4;
  animation: ringPulse 3s ease-in-out infinite;
}
@keyframes ringPulse {
  0%, 100% { transform: scale(1); opacity: 0.4; }
  50%       { transform: scale(1.05); opacity: 0.7; }
}

.about-meta {
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
  margin-top: 1rem;
}

.meta-item {
  display: flex;
  justify-content: space-between;
  padding: 0.55rem 0;
  border-bottom: 1px solid var(--border);
  font-size: 0.88rem;
}
.meta-item:last-child { border-bottom: none; }
.meta-label { color: var(--text-muted); font-family: var(--font-mono); font-size: 0.78rem; }
.meta-value { color: var(--text-light); font-weight: 500; }

.about-text p {
  color: var(--text-dim);
  margin-bottom: 1.2rem;
  font-size: 1.02rem;
  line-height: 1.8;
}
.about-lead {
  font-size: 1.18rem !important;
  color: var(--text-light) !important;
  font-weight: 400;
}

.about-quote {
  margin-top: 2rem;
  padding-left: 1.5rem;
  border-left: 2px solid var(--accent);
}
.about-quote blockquote {
  font-family: var(--font-serif);
  font-style: italic;
  font-size: 1.2rem;
  color: var(--accent-light);
  line-height: 1.5;
}

/* =========================================
   SKILLS
   ========================================= */
.skills-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
  gap: 1.2rem;
}

.skill-card {
  background: var(--bg-secondary);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  padding: 1.6rem 1.4rem;
  transition: transform var(--transition), border-color var(--transition), box-shadow var(--transition);
  cursor: default;
}
.skill-card:hover {
  transform: translateY(-4px);
  border-color: var(--border-hover);
  box-shadow: var(--shadow-md);
}

.skill-icon {
  width: 40px; height: 40px;
  color: var(--accent-light);
  margin-bottom: 1rem;
}
.skill-icon svg { width: 100%; height: 100%; }

.skill-name {
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--text-light);
  margin-bottom: 0.35rem;
}

.skill-desc {
  font-size: 0.78rem;
  color: var(--text-muted);
  line-height: 1.5;
  margin-bottom: 1.2rem;
}

.skill-bar-wrap {
  width: 100%;
  height: 3px;
  background: var(--border);
  border-radius: 10px;
  overflow: hidden;
  margin-bottom: 0.5rem;
}

.skill-bar {
  height: 100%;
  width: 0;
  background: linear-gradient(90deg, var(--accent), var(--accent-light));
  border-radius: 10px;
  transition: width 1.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.skill-percent {
  font-family: var(--font-mono);
  font-size: 0.72rem;
  color: var(--accent-light);
}

/* =========================================
   PROJECTS
   ========================================= */
.projects { background: var(--bg-secondary); }

.projects-grid {
  display: grid;
  gap: 1.5rem;
}

.project-card {
  background: var(--bg-main);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 2rem 2.2rem;
  transition: border-color var(--transition), box-shadow var(--transition), transform var(--transition);
  position: relative;
  overflow: hidden;
}
.project-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 2px;
  background: linear-gradient(90deg, transparent, var(--accent), transparent);
  opacity: 0;
  transition: opacity var(--transition);
}
.project-card:hover {
  border-color: var(--border-hover);
  box-shadow: var(--shadow-lg);
  transform: translateY(-3px);
}
.project-card:hover::before { opacity: 1; }

.project-badge {
  position: absolute;
  top: 1.2rem; right: 1.5rem;
  font-family: var(--font-mono);
  font-size: 0.65rem;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--accent-light);
  background: rgba(113,90,90,0.15);
  border: 1px solid rgba(113,90,90,0.3);
  padding: 0.2rem 0.7rem;
  border-radius: 20px;
}

.project-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1.2rem;
  flex-wrap: wrap;
  gap: 1rem;
}

.project-icon {
  width: 48px; height: 48px;
  background: rgba(113,90,90,0.15);
  border: 1px solid rgba(113,90,90,0.3);
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--accent-light);
}
.project-icon svg { width: 26px; height: 26px; }

.project-stack { display: flex; gap: 0.5rem; flex-wrap: wrap; }
.stack-tag {
  font-family: var(--font-mono);
  font-size: 0.7rem;
  color: var(--text-muted);
  background: var(--bg-secondary);
  border: 1px solid var(--border);
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
}

.project-title {
  font-family: var(--font-serif);
  font-size: 1.55rem;
  font-weight: 400;
  color: var(--text-light);
  margin-bottom: 0.8rem;
  line-height: 1.2;
}

.project-desc {
  color: var(--text-dim);
  font-size: 0.95rem;
  margin-bottom: 1rem;
}

.project-features {
  list-style: none;
  margin-bottom: 1.8rem;
}
.project-features li {
  font-size: 0.9rem;
  color: var(--text-dim);
  padding: 0.35rem 0;
  padding-left: 1.2rem;
  position: relative;
  border-bottom: 1px solid var(--border);
}
.project-features li:last-child { border-bottom: none; }
.project-features li::before {
  content: '→';
  position: absolute;
  left: 0;
  color: var(--accent-light);
  font-size: 0.8rem;
}

.project-actions { display: flex; gap: 0.8rem; flex-wrap: wrap; }

/* =========================================
   EXERCISES
   ========================================= */
.exercises-list {
  display: flex;
  flex-direction: column;
  gap: 1px;
  background: var(--border);
  border: 1px solid var(--border);
  border-radius: var(--radius-md);
  overflow: hidden;
}

.exercise-item {
  display: flex;
  align-items: center;
  gap: 2rem;
  padding: 1.8rem 2rem;
  background: var(--bg-secondary);
  transition: background var(--transition);
}
.exercise-item:hover {
  background: rgba(68,68,78,0.8);
}
.exercise-item.atelier {
  background: rgba(113,90,90,0.07);
}
.exercise-item.atelier:hover {
  background: rgba(113,90,90,0.12);
}

.exercise-number {
  font-family: var(--font-mono);
  font-size: 1.4rem;
  color: var(--accent-light);
  font-weight: 300;
  min-width: 48px;
  text-align: center;
}

.exercise-content { flex: 1; }

.exercise-title {
  font-size: 1.05rem;
  font-weight: 500;
  color: var(--text-light);
  margin-bottom: 0.4rem;
}

.exercise-desc {
  font-size: 0.88rem;
  color: var(--text-dim);
  line-height: 1.6;
  margin-bottom: 0.8rem;
}

.exercise-tags { display: flex; gap: 0.5rem; flex-wrap: wrap; }
.ex-tag {
  font-family: var(--font-mono);
  font-size: 0.68rem;
  color: var(--accent-light);
  background: rgba(113,90,90,0.1);
  border: 1px solid rgba(113,90,90,0.25);
  padding: 0.15rem 0.55rem;
  border-radius: 4px;
}

.exercise-link {
  width: 40px; height: 40px;
  border: 1px solid var(--border);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--text-muted);
  flex-shrink: 0;
  transition: border-color var(--transition), color var(--transition), background var(--transition), transform var(--transition);
}
.exercise-link svg { width: 16px; height: 16px; }
.exercise-link:hover {
  border-color: var(--accent-light);
  color: var(--text-light);
  background: rgba(113,90,90,0.15);
  transform: translateX(3px);
}

/* =========================================
   CONTACT
   ========================================= */
.contact { background: var(--bg-secondary); }

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: 4rem;
  align-items: start;
}

.contact-lead {
  font-size: 1.05rem;
  color: var(--text-dim);
  line-height: 1.8;
  margin-bottom: 2.5rem;
}

.contact-detail {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.contact-icon {
  width: 42px; height: 42px;
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--accent-light);
  flex-shrink: 0;
}
.contact-icon svg { width: 18px; height: 18px; }

.detail-label {
  display: block;
  font-family: var(--font-mono);
  font-size: 0.68rem;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  color: var(--text-muted);
  margin-bottom: 0.25rem;
}
.detail-value {
  display: block;
  color: var(--text-light);
  font-size: 0.95rem;
}

/* Contact Form */
.contact-form {
  background: var(--bg-main);
  border: 1px solid var(--border);
  border-radius: var(--radius-lg);
  padding: 2.2rem;
}

.form-group {
  margin-bottom: 1.4rem;
}

.form-group label {
  display: block;
  font-size: 0.82rem;
  font-family: var(--font-mono);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--text-muted);
  margin-bottom: 0.5rem;
}

.form-group input,
.form-group textarea {
  width: 100%;
  background: var(--bg-secondary);
  border: 1px solid var(--border);
  border-radius: var(--radius-sm);
  padding: 0.8rem 1rem;
  color: var(--text-light);
  font-family: var(--font-sans);
  font-size: 0.95rem;
  line-height: 1.5;
  transition: border-color var(--transition), box-shadow var(--transition);
  outline: none;
  resize: vertical;
}

.form-group input::placeholder,
.form-group textarea::placeholder {
  color: var(--text-muted);
}

.form-group input:focus,
.form-group textarea:focus {
  border-color: var(--accent-light);
  box-shadow: 0 0 0 3px rgba(113,90,90,0.12);
}

.form-success {
  display: none;
  align-items: center;
  gap: 0.6rem;
  margin-top: 1rem;
  padding: 0.8rem 1.2rem;
  background: rgba(113,90,90,0.12);
  border: 1px solid rgba(113,90,90,0.3);
  border-radius: var(--radius-sm);
  color: var(--accent-light);
  font-size: 0.9rem;
}
.form-success svg { width: 18px; height: 18px; }
.form-success.visible { display: flex; }

/* =========================================
   FOOTER
   ========================================= */
.footer {
  background: var(--bg-main);
  border-top: 1px solid var(--border);
  padding: 2.5rem 0;
}

.footer-content {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 1rem;
}

.footer-logo {
  font-family: var(--font-serif);
  font-size: 1.3rem;
  font-weight: 600;
  color: var(--accent-light);
}

.footer-text {
  font-family: var(--font-mono);
  font-size: 0.75rem;
  color: var(--text-muted);
  letter-spacing: 0.05em;
}

.footer-made {
  font-size: 0.82rem;
  color: var(--text-muted);
}

/* =========================================
   REVEAL ANIMATIONS
   ========================================= */
.reveal {
  opacity: 0;
  transform: translateY(24px);
  transition: opacity 0.7s ease, transform 0.7s ease;
}
.reveal.visible {
  opacity: 1;
  transform: translateY(0);
}

/* =========================================
   RESPONSIVE
   ========================================= */
@media (max-width: 900px) {
  .about-grid {
    grid-template-columns: 1fr;
    gap: 2.5rem;
  }
  .about-card {
    display: flex;
    align-items: center;
    gap: 2rem;
    text-align: left;
  }
  .about-avatar { margin: 0; flex-shrink: 0; }
  .about-meta { flex-direction: row; flex-wrap: wrap; gap: 1rem; margin: 0; }
  .meta-item { border-bottom: none; flex-direction: column; gap: 0.2rem; }

  .contact-grid {
    grid-template-columns: 1fr;
    gap: 2.5rem;
  }
}

@media (max-width: 700px) {
  .nav-links {
    position: fixed;
    top: var(--nav-h); left: 0; right: 0;
    flex-direction: column;
    background: var(--bg-main);
    border-bottom: 1px solid var(--border);
    padding: 1.5rem 2rem 2rem;
    gap: 1.2rem;
    transform: translateY(-110%);
    opacity: 0;
    transition: transform var(--transition), opacity var(--transition);
    pointer-events: none;
    z-index: 999;
    align-items: flex-start;
  }
  .nav-links.open {
    transform: translateY(0);
    opacity: 1;
    pointer-events: all;
  }
  .nav-links a { font-size: 1.05rem; }
  .nav-toggle { display: flex; }

  .hero-actions { flex-direction: column; align-items: center; }

  .exercise-item {
    flex-direction: column;
    align-items: flex-start;
    gap: 1rem;
  }
  .exercise-link {
    align-self: flex-end;
  }

  .skills-grid {
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  }

  .footer-content {
    flex-direction: column;
    text-align: center;
  }

  .about-card {
    flex-direction: column;
    text-align: center;
  }
  .about-meta { justify-content: center; }
}

@media (max-width: 480px) {
  .project-header { flex-direction: column; align-items: flex-start; }
  .project-badge { position: static; align-self: flex-start; }
}

  </style>
</head>
<body>
  <nav class="navbar" id="navbar">
    <div class="nav-logo">Chelha Houssam</div>
    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="#hero">Accueil</a></li>
      <li><a href="#about">À propos</a></li>
      <li><a href="#skills">Compétences</a></li>
      <li><a href="#projects">Projets</a></li>
      <li><a href="#exercises">Exercices</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>

  <!-- HERO -->
  <section class="hero" id="hero">
    <div class="hero-noise"></div>
    <div class="hero-glow"></div>
    <div class="hero-content">
      <p class="hero-eyebrow">Bienvenue sur mon portfolio</p>
      <h1 class="hero-name">
        <span class="name-first">Houssam</span>
        <span class="name-last">Chelha</span>
      </h1>
      <p class="hero-title">Stagiaire en Développement Digital</p>
      <p class="hero-intro">Passionné par la création web, j'explore chaque jour<br>les possibilités infinies du développement digital.</p>
      <div class="hero-actions">
        <a href="#projects" class="btn btn-primary">Voir mes projets</a>
        <a href="#contact" class="btn btn-ghost">Me contacter</a>
      </div>
    </div>
    <div class="hero-scroll-hint">
      <span>Défiler</span>
      <div class="scroll-line"></div>
    </div>
  </section>

  <!-- ABOUT -->
  <section class="section about" id="about">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">01 / À propos</span>
        <h2 class="section-title">Qui suis-je ?</h2>
      </div>
      <div class="about-grid">
        <div class="about-card">
          <div class="about-avatar">
            <div class="avatar-initials" style="overflow: hidden;"><img width="100%" src="/5fa04d40-cdc0-4484-a99d-d2c31afa4ab0.png" alt=""></div>
            <div class="avatar-ring"></div>
          </div>
          <div class="about-meta">
            <div class="meta-item">
              <span class="meta-label">Âge</span>
              <span class="meta-value">19 ans</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Statut</span>
              <span class="meta-value">Stagiaire</span>
            </div>
            <div class="meta-item">
              <span class="meta-label">Pays</span>
              <span class="meta-value">Maroc 🇲🇦</span>
            </div>
          </div>
        </div>
        <div class="about-text">
          <p class="about-lead">Je suis un développeur en formation, curieux et motivé.</p>
          <p>Depuis que j'ai découvert le monde du web, je me consacre à maîtriser les technologies fondamentales : <strong>HTML</strong>, <strong>CSS</strong>, <strong>JavaScript</strong> et <strong>PHP</strong>. Chaque ligne de code est pour moi une opportunité d'apprendre et de progresser.</p>
          <p>Mon état d'esprit de croissance me pousse à chercher constamment à m'améliorer, à relever de nouveaux défis et à transformer les problèmes en solutions élégantes. Je crois fermement que la persévérance et la curiosité sont les clés du succès dans ce domaine.</p>
          <div class="about-quote">
            <blockquote>"Le code est ma façon de donner vie aux idées."</blockquote>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SKILLS -->
  <section class="section skills" id="skills">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">02 / Compétences</span>
        <h2 class="section-title">Mes Technologies</h2>
      </div>
      <div class="skills-grid">
        <div class="skill-card" data-level="85">
          <div class="skill-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4l2 16 6 2 6-2 2-16H4z"/><path d="M8 8h8M8.5 12h7l-.5 4-3 1-3-1-.3-2"/></svg>
          </div>
          <h3 class="skill-name">HTML</h3>
          <p class="skill-desc">Structure sémantique et accessibilité web</p>
          <div class="skill-bar-wrap">
            <div class="skill-bar" data-width="85"></div>
          </div>
          <span class="skill-percent">85%</span>
        </div>
        <div class="skill-card" data-level="80">
          <div class="skill-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4l2 16 6 2 6-2 2-16H4z"/><path d="M8 12h8M8 8h5l-.5 4h-4.5"/></svg>
          </div>
          <h3 class="skill-name">CSS</h3>
          <p class="skill-desc">Mise en page moderne, Flexbox & Grid</p>
          <div class="skill-bar-wrap">
            <div class="skill-bar" data-width="80"></div>
          </div>
          <span class="skill-percent">80%</span>
        </div>
        <div class="skill-card" data-level="65">
          <div class="skill-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 3h18v18H3z"/><path d="M7 17v-4l3 3 3-3v4M16 14a2 2 0 0 0 2-2V8"/></svg>
          </div>
          <h3 class="skill-name">JavaScript</h3>
          <p class="skill-desc">Interactivité et logique côté client</p>
          <div class="skill-bar-wrap">
            <div class="skill-bar" data-width="65"></div>
          </div>
          <span class="skill-percent">65%</span>
        </div>
        <div class="skill-card" data-level="70">
          <div class="skill-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2z"/><path d="M9 8l-3 4 3 4M15 8l3 4-3 4M13 7l-2 10"/></svg>
          </div>
          <h3 class="skill-name">PHP</h3>
          <p class="skill-desc">Développement back-end et formulaires</p>
          <div class="skill-bar-wrap">
            <div class="skill-bar" data-width="70"></div>
          </div>
          <span class="skill-percent">70%</span>
        </div>
        <div class="skill-card" data-level="60">
          <div class="skill-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 5v5c0 1.66-4.03 3-9 3S3 11.66 3 10V5"/><path d="M21 10v4c0 1.66-4.03 3-9 3S3 15.66 3 14v-4"/><path d="M21 14v5c0 1.66-4.03 3-9 3S3 20.66 3 19v-5"/></svg>
          </div>
          <h3 class="skill-name">MySQL</h3>
          <p class="skill-desc">Gestion de bases de données relationnelles</p>
          <div class="skill-bar-wrap">
            <div class="skill-bar" data-width="60"></div>
          </div>
          <span class="skill-percent">60%</span>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->
  <section class="section projects" id="projects">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">03 / Projets</span>
        <h2 class="section-title">Mes Réalisations</h2>
      </div>
      <div class="projects-grid">
        <div class="project-card featured">
          <div class="project-badge">Featured</div>
          <div class="project-header">
            <div class="project-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2z"/><path d="M9 8l-3 4 3 4M15 8l3 4-3 4M13 7l-2 10"/></svg>
            </div>
            <div class="project-stack">
              <span class="stack-tag">PHP</span>
              <span class="stack-tag">MySQL</span>
              <span class="stack-tag">HTML/CSS</span>
            </div>
          </div>
          <h3 class="project-title">Mes Projets</h3>
          <p class="project-desc">Mini projets :</p>
          <ul class="project-features">
            <li>Formulaire avec champs Nom et Prénom ...</li>
            <li>Triangle en *</li>
            <li>Tableau de Multiplication</li>
          </ul>
          <div class="project-actions">
            <a href="https://github.com/houssamchelha-commits" class="btn btn-primary btn-sm">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6M15 3h6v6M10 14L21 3"/></svg>
              Voir projet
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXERCISES -->
  <section class="section exercises" id="exercises">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">04 / Exercices</span>
        <h2 class="section-title">Travaux Pratiques</h2>
      </div>
      <div class="exercises-list">
        <div class="exercise-item">
          <div class="exercise-number">01</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier 1:</h3>
            <p class="exercise-desc">Création d'un formulaire TPs avec des traitements .</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="atelier1.php" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        <!--
        <div class="exercise-item">
          <div class="exercise-number">02</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Liens dynamiques (GET)</h3>
            <p class="exercise-desc">Mise en place de liens dynamiques avec passage de paramètres via l'URL (méthode GET). Récupération et affichage des données transmises.</p>
            <div class="exercise-tags">
              <span class="ex-tag">HTML</span>
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="#" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
        -->
        <div class="exercise-item atelier">
          <div class="exercise-number">★</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Inscription</h3>
            <p class="exercise-desc">Formulaire d'inscription complet : saisie des informations personnelles.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="formulaire.php" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="section contact" id="contact">
    <div class="container">
      <div class="section-header">
        <span class="section-tag">05 / Contact</span>
        <h2 class="section-title">Travaillons ensemble</h2>
      </div>
      <div class="contact-grid">
        <div class="contact-info">
          <p class="contact-lead">Vous avez un projet ou une question ? N'hésitez pas à me contacter, je serai ravi d'échanger avec vous.</p>
          <div class="contact-detail">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div>
              <span class="detail-label">Email</span>
              <span class="detail-value">houssamchelha@gmail.com</span>
            </div>
          </div>
          <div class="contact-detail">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <span class="detail-label">Localisation</span>
              <span class="detail-value">Maroc</span>
            </div>
          </div>
        </div>
        <form class="contact-form" id="contactForm">
          <div class="form-group">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="votre@email.com" required />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" placeholder="Votre message..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full">
            Envoyer le message
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          </button>
          <div class="form-success" id="formSuccess">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            Message envoyé avec succès !
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <span class="footer-logo">Celha Houssam</span>
        <p class="footer-text">© 2025 Houssam Chelha — Stagiaire en Développement Digital</p>
        <p class="footer-made"> &lt;3 </p>
      </div>
    </div>
  </footer>

  <script>
    const navbar = document.getElementById('navbar');
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');

window.addEventListener('scroll', () => {
  if (window.scrollY > 30) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

navToggle.addEventListener('click', () => {
  navToggle.classList.toggle('active');
  navLinks.classList.toggle('open');
});

// Close mobile menu when a link is clicked
navLinks.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    navToggle.classList.remove('active');
    navLinks.classList.remove('open');
  });
});


// --- SCROLL REVEAL ---
const revealEls = document.querySelectorAll(
  '.section-header, .about-card, .about-text, .skill-card, .project-card, .exercise-item, .contact-info, .contact-form'
);

revealEls.forEach(el => el.classList.add('reveal'));

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry, i) => {
    if (entry.isIntersecting) {
      // Stagger children within a group
      const delay = entry.target.dataset.delay || 0;
      setTimeout(() => {
        entry.target.classList.add('visible');
      }, delay);
      revealObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.12 });

// Add staggered delays for grouped elements
document.querySelectorAll('.skill-card').forEach((el, i) => {
  el.dataset.delay = i * 80;
});
document.querySelectorAll('.exercise-item').forEach((el, i) => {
  el.dataset.delay = i * 100;
});

revealEls.forEach(el => revealObserver.observe(el));


// --- SKILL BARS: animate on enter ---
const skillBars = document.querySelectorAll('.skill-bar');
const barObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const bar = entry.target;
      const width = bar.dataset.width;
      setTimeout(() => {
        bar.style.width = width + '%';
      }, 300);
      barObserver.unobserve(bar);
    }
  });
}, { threshold: 0.3 });

skillBars.forEach(bar => barObserver.observe(bar));


// --- CONTACT FORM: submit handler ---
const contactForm = document.getElementById('contactForm');
const formSuccess = document.getElementById('formSuccess');

contactForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const btn = contactForm.querySelector('button[type="submit"]');
  btn.textContent = 'Envoi en cours...';
  btn.disabled = true;

  // Simulate send
  setTimeout(() => {
    contactForm.reset();
    btn.textContent = 'Envoyer le message';
    btn.disabled = false;
    formSuccess.classList.add('visible');
    setTimeout(() => formSuccess.classList.remove('visible'), 5000);
  }, 1400);
});


// --- SMOOTH ACTIVE NAV LINK ---
const sections = document.querySelectorAll('section[id]');
const navAnchors = document.querySelectorAll('.nav-links a');

const sectionObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const id = entry.target.getAttribute('id');
      navAnchors.forEach(a => {
        a.style.color = '';
        if (a.getAttribute('href') === '#' + id) {
          a.style.color = 'var(--text-light)';
        }
      });
    }
  });
}, { threshold: 0.4 });

sections.forEach(s => sectionObserver.observe(s));

  </script>
</body>
</html>
