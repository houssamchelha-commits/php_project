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

.music-toggle {
  position: fixed;
  right: 1.25rem;
  bottom: 1.25rem;
  z-index: 1001;
  display: flex;
  align-items: center;
  gap: 0.55rem;
  padding: 0.7rem 0.95rem;
  border: 1px solid var(--border);
  border-radius: 999px;
  background: rgba(55, 53, 62, 0.92);
  color: var(--text-light);
  font: 400 0.78rem var(--font-sans);
  cursor: pointer;
  box-shadow: var(--shadow-md);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  transition: border-color var(--transition), background var(--transition);
}

.music-toggle:hover, .music-toggle:focus-visible {
  border-color: var(--accent-light);
  background: var(--bg-secondary);
}

.music-toggle:focus-visible {
  outline: 2px solid var(--accent-light);
  outline-offset: 3px;
}

.music-toggle svg { width: 17px; height: 17px; color: var(--accent-light); }

@media (max-width: 480px) {
  .music-toggle { right: 0.85rem; bottom: 0.85rem; }
}

.hero {
  position: relative;
  min-height: 100vh;
  overflow: hidden;

  background-image: url("/images/bpxxqqvps4h91.gif");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.hero {
  position: relative;
  min-height: 100vh;
  overflow: hidden;

  background: url("/images/bpxxqqvps4h91.gif") center center / cover no-repeat;
}

.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.35);
  z-index: 0;
  pointer-events: none;
}

.hero-noise,
.hero-glow {
  position: absolute;
  inset: 0;
  z-index: 1;
  pointer-events: none;
}

.hero-content,
.hero-scroll-hint {
  position: relative;
  z-index: 2;
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


.global-cursor-star {
  position: fixed;
  z-index: 2000;
  pointer-events: none;
  color: var(--star-color, #16C8FF);
  font-size: var(--star-size, 13px);
  line-height: 1;
  text-shadow: 0 0 10px currentColor;
  animation: globalCursorStarFade 700ms ease-out forwards;
}

@keyframes globalCursorStarFade {
  from { opacity: 0.95; transform: translate(-50%, -50%) scale(0.65) rotate(0); }
  to { opacity: 0; transform: translate(-50%, -85%) scale(1.3) rotate(35deg); }
}

@media (prefers-reduced-motion: reduce), (pointer: coarse) {
  .global-cursor-star { display: none; animation: none; }
}

.brand-logo {
  display: inline-flex;
  flex: 0 0 auto;
  align-items: center;
  justify-content: center;
  color: inherit;
  cursor: pointer !important;
}

.brand-orbit {
  position: relative;
  display: grid;
  width: 48px;
  height: 48px;
  place-items: center;
}

.brand-orbit::before {
  content: '';
  position: absolute;
  inset: 0;
  border: 1px solid rgba(22, 200, 255, 0.75);
  border-radius: 50%;
  box-shadow: 0 0 14px rgba(8, 120, 249, 0.28), inset 0 0 12px rgba(240, 42, 214, 0.16);
  animation: brandOrbitPulse 2.8s ease-in-out infinite;
}

.brand-orbit img {
  width: 40px;
  height: 40px;
  border: 2px solid var(--color-primary);
  border-radius: 50%;
  object-fit: cover;
  object-position: center 24%;
  image-rendering: pixelated;
  box-shadow: 0 0 12px rgba(240, 42, 214, 0.38);
}

.brand-particle {
  position: absolute;
  width: 4px;
  height: 4px;
  border-radius: 1px;
  background: var(--particle-color, var(--color-cyan));
  box-shadow: 0 0 8px currentColor;
  opacity: 0;
  animation: brandParticleBurst 2.4s ease-out infinite;
}

.brand-particle:nth-child(2) { --particle-color: var(--color-cyan); top: 2px; left: 8px; }
.brand-particle:nth-child(3) { --particle-color: var(--color-primary); top: 9px; right: 1px; animation-delay: 0.6s; }
.brand-particle:nth-child(4) { --particle-color: var(--color-purple); bottom: 4px; right: 7px; animation-delay: 1.2s; }
.brand-particle:nth-child(5) { --particle-color: var(--color-cyan); bottom: 9px; left: 1px; animation-delay: 1.8s; }

.footer {
  position: relative;
  isolation: isolate;
  overflow: hidden;
  background: #050A1B !important;
}

.footer::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background:
    linear-gradient(90deg, rgba(5, 10, 27, 0.72), rgba(5, 10, 27, 0.42) 50%, rgba(5, 10, 27, 0.72)),
    linear-gradient(0deg, rgba(5, 10, 27, 0.68), rgba(5, 10, 27, 0.38)),
    url("/images/footer-pic.png") center 58% / cover no-repeat;
  box-shadow: inset 0 18px 40px rgba(5, 10, 27, 0.7);
}

.footer .container, .footer-content {
  position: relative;
  z-index: 1;
}

.footer .brand-orbit {
  width: 64px;
  height: 64px;
}

.footer .brand-orbit img {
  width: 54px;
  height: 54px;
}

@keyframes brandOrbitPulse {
  0%, 100% { transform: scale(0.96); opacity: 0.72; }
  50% { transform: scale(1.08); opacity: 1; }
}

@keyframes brandParticleBurst {
  0%, 12% { opacity: 0; transform: translate(0, 0) scale(0.55); }
  25% { opacity: 1; }
  72% { opacity: 0.75; }
  100% { opacity: 0; transform: translate(var(--particle-x, 8px), var(--particle-y, -10px)) scale(0.3); }
}

.brand-particle:nth-child(2) { --particle-x: -7px; --particle-y: -12px; }
.brand-particle:nth-child(3) { --particle-x: 11px; --particle-y: -7px; }
.brand-particle:nth-child(4) { --particle-x: 8px; --particle-y: 10px; }
.brand-particle:nth-child(5) { --particle-x: -10px; --particle-y: 7px; }

@media (prefers-reduced-motion: reduce) {
  .brand-orbit::before, .brand-particle { animation: none; }
  .brand-particle { opacity: 0.8; }
}</style>
</head>
<body>
  <nav class="navbar" id="navbar">
    <a class="brand-logo nav-logo" href="#hero" aria-label="Accueil — Houssam Chelha">
      <span class="brand-orbit">
        <img src="/images/houssam.png" alt="Portrait de Houssam Chelha">
        <span class="brand-particle"></span><span class="brand-particle"></span>
        <span class="brand-particle"></span><span class="brand-particle"></span>
      </span>
    </a>
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
            <div class="avatar-initials" style="overflow: hidden;"><img width="100%" src="/images/5fa04d40-cdc0-4484-a99d-d2c31afa4ab0.png" alt=""></div>
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
        <!--
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
        
        <div class="exercise-item atelier">
          <div class="exercise-number">02</div>
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

        <div class="exercise-item atelier">
          <div class="exercise-number">03</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Upload de fichiers en PHP</h3>
            <p class="exercise-desc">Formulaire d'upload de fichiers : saisie des informations .</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">★</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — E-Fruit</h3>
            <p class="exercise-desc">un atelier complet pour un E-Fruit site web.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="efruit_store/index.php" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">04</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Gestion des étudiants</h3>
            <p class="exercise-desc">Gestion des étudiants : saisie des informations et modification.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">05</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Gestion des sessions, cookies</h3>
            <p class="exercise-desc">Gestion des sessions et cookies : saisie des informations et modification.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">06</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — POO</h3>
            <p class="exercise-desc">Introduction à la programmation orientée objet en PHP.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">07</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Application E-Fruits</h3>
            <p class="exercise-desc">Application complète pour la gestion des e-fruits.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">08</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — application gestion des etudiants</h3>
            <p class="exercise-desc">Application pour la gestion des étudiants.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">09</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — La Pagination en PHP</h3>
            <p class="exercise-desc">Gestion de la pagination dans les applications PHP.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">10</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Ajax Reponse HTML</h3>
            <p class="exercise-desc">Gestion des réponses HTML via Ajax dans les applications PHP.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">11</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Ajax Reponse Json</h3>
            <p class="exercise-desc">Gestion des réponses JSON via Ajax dans les applications PHP.</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">12</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier —  services web</h3>
            <p class="exercise-desc">services web</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>

        <div class="exercise-item atelier">
          <div class="exercise-number">13</div>
          <div class="exercise-content">
            <h3 class="exercise-title">Atelier — Burger_Code</h3>
            <p class="exercise-desc">Code de base pour un burger</p>
            <div class="exercise-tags">
              <span class="ex-tag">PHP</span>
            </div>
          </div>
          <a href="" class="exercise-link">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      -->
        <div class="exercise-item atelier">
          <div class="exercise-number">Gestion de projets</div>
          <div class="exercise-content">
            <h3 class="exercise-title">M202</h3>
            <p class="exercise-desc">Module Aproche Agile</p>
            <div class="exercise-tags">
              <span class="ex-tag">Modèle en cascade/Agile Scrum</span>
            </div>
          </div>
          <a href="m202.php" class="exercise-link" aria-label="Ouvrir le module M202">
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
        <a class="brand-logo footer-logo" href="#hero" aria-label="Retour en haut — Houssam Chelha">
          <span class="brand-orbit">
            <img src="/images/houssam.png" alt="Portrait de Houssam Chelha">
            <span class="brand-particle"></span><span class="brand-particle"></span>
            <span class="brand-particle"></span><span class="brand-particle"></span>
          </span>
        </a>
        <p class="footer-text">© 2025 Houssam Chelha — Stagiaire en Développement Digital</p>
        <p class="footer-made"> &lt;3 </p>
      </div>
    </div>
  </footer>

  <button class="music-toggle" id="musicToggle" type="button" aria-label="Activer la musique de piano" aria-pressed="false">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true">
      <path d="M9 18V5l12-2v13" />
      <circle cx="6" cy="18" r="3" />
      <circle cx="18" cy="16" r="3" />
    </svg>
    <span id="musicToggleLabel">Activer la musique</span>
  </button>

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
  <script>
(() => {
  const toggle = document.getElementById('musicToggle');
  const label = document.getElementById('musicToggleLabel');
  const chords = [
    [261.63, 329.63, 392.00, 493.88],
    [220.00, 261.63, 329.63, 392.00],
    [174.61, 220.00, 261.63, 329.63],
    [196.00, 246.94, 293.66, 392.00]
  ];
  const melody = [523.25, 392.00, 440.00, 329.63, 392.00, 329.63, 293.66, 392.00];
  let audioContext;
  let masterGain;
  let chordTimer;
  let melodyTimer;
  let melodyStartTimer;
  let chordIndex = 0;
  let noteIndex = 0;
  let activeChord;
  let playing = false;

  function updateButton(isPlaying, message) {
    playing = isPlaying;
    toggle.setAttribute('aria-pressed', String(isPlaying));
    toggle.setAttribute('aria-label', message || (isPlaying ? 'Désactiver la musique de piano' : 'Activer la musique de piano'));
    label.textContent = message || (isPlaying ? 'Désactiver la musique' : 'Activer la musique');
  }

  function createChord(frequencies) {
    const chordGain = audioContext.createGain();
    chordGain.gain.setValueAtTime(0.0001, audioContext.currentTime);
    chordGain.connect(masterGain);

    const oscillators = frequencies.map(frequency => {
      const oscillator = audioContext.createOscillator();
      const voiceGain = audioContext.createGain();
      oscillator.type = 'sine';
      oscillator.frequency.value = frequency;
      voiceGain.gain.value = 0.12;
      oscillator.connect(voiceGain);
      voiceGain.connect(chordGain);
      oscillator.start();
      return oscillator;
    });

    return { gain: chordGain, oscillators };
  }

  function changeChord() {
    const now = audioContext.currentTime;
    const nextChord = createChord(chords[chordIndex]);
    nextChord.gain.gain.setValueAtTime(0.0001, now);
    nextChord.gain.gain.linearRampToValueAtTime(0.3, now + 2.5);

    if (activeChord) {
      activeChord.gain.gain.cancelScheduledValues(now);
      activeChord.gain.gain.setValueAtTime(0.3, now);
      activeChord.gain.gain.linearRampToValueAtTime(0.0001, now + 2.5);
      activeChord.oscillators.forEach(oscillator => oscillator.stop(now + 2.6));
    }

    activeChord = nextChord;
    chordIndex = (chordIndex + 1) % chords.length;
  }

  function playNote(frequency) {
    const noteGain = audioContext.createGain();
    const lowPass = audioContext.createBiquadFilter();
    lowPass.type = 'lowpass';
    lowPass.frequency.value = 2800;
    lowPass.connect(noteGain);
    noteGain.connect(masterGain);

    const now = audioContext.currentTime;
    noteGain.gain.setValueAtTime(0.0001, now);
    noteGain.gain.linearRampToValueAtTime(0.1, now + 0.04);
    noteGain.gain.exponentialRampToValueAtTime(0.0001, now + 2.4);

    [[1, 0.68], [2, 0.2], [3, 0.06]].forEach(([partial, level]) => {
      const oscillator = audioContext.createOscillator();
      const partialGain = audioContext.createGain();
      oscillator.type = 'sine';
      oscillator.frequency.value = frequency * partial;
      partialGain.gain.value = level;
      oscillator.connect(partialGain);
      partialGain.connect(lowPass);
      oscillator.start(now);
      oscillator.stop(now + 2.5);
    });
  }

  function playMelodyNote() {
    playNote(melody[noteIndex]);
    noteIndex += 1;
    if (noteIndex === melody.length) noteIndex = 0;
  }

  async function startMusic() {
    if (!window.AudioContext) {
      updateButton(false, 'Musique indisponible sur ce navigateur');
      return;
    }

    audioContext = new AudioContext();
    masterGain = audioContext.createGain();
    masterGain.gain.value = 0.12;
    masterGain.connect(audioContext.destination);
    await audioContext.resume();

    if (audioContext.state !== 'running') {
      await audioContext.close();
      audioContext = null;
      masterGain = null;
      updateButton(false, 'Cliquez pour activer la musique');
      return;
    }

    updateButton(true);
    changeChord();
    melodyStartTimer = window.setTimeout(playMelodyNote, 1800);
    chordTimer = window.setInterval(changeChord, 9000);
    melodyTimer = window.setInterval(playMelodyNote, 3600);
  }

  async function stopMusic() {
    window.clearInterval(chordTimer);
    window.clearInterval(melodyTimer);
    window.clearTimeout(melodyStartTimer);
    if (audioContext && audioContext.state !== 'closed') {
      const now = audioContext.currentTime;
      masterGain.gain.cancelScheduledValues(now);
      masterGain.gain.setValueAtTime(masterGain.gain.value, now);
      masterGain.gain.linearRampToValueAtTime(0.0001, now + 0.6);
      await new Promise(resolve => window.setTimeout(resolve, 650));
      await audioContext.close();
      audioContext = null;
      masterGain = null;
      activeChord = null;
    }
    updateButton(false);
  }

  toggle.addEventListener('click', async () => {
    toggle.disabled = true;
    try {
      if (playing) {
        await stopMusic();
      } else {
        await startMusic();
      }
    } catch (error) {
      console.error('Could not toggle background music:', error);
      updateButton(false, 'Cliquez pour réessayer la musique');
    } finally {
      toggle.disabled = false;
    }
  });
})();
  </script>
<script>
(() => {
  if (window.matchMedia('(prefers-reduced-motion: reduce), (pointer: coarse)').matches) return;

  let lastStarTime = 0;
  const colors = ['#16C8FF', '#F02AD6', '#8956F6'];

  document.addEventListener('pointermove', event => {
    if (event.pointerType !== 'mouse' && event.pointerType !== 'pen') return;

    const now = performance.now();
    if (now - lastStarTime < 45) return;
    lastStarTime = now;

    const star = document.createElement('span');
    star.className = 'global-cursor-star';
    star.textContent = Math.random() > 0.45 ? '✦' : '✧';
    star.style.left = `${event.clientX}px`;
    star.style.top = `${event.clientY}px`;
    star.style.setProperty('--star-color', colors[Math.floor(Math.random() * colors.length)]);
    star.style.setProperty('--star-size', `${10 + Math.random() * 8}px`);
    document.body.appendChild(star);
    star.addEventListener('animationend', () => star.remove(), { once: true });
  });
})();
</script>
</body>
</html>
