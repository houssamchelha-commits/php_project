<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>M202 — Approche Agile | Houssam Chelha</title>
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

  
/* ===== M202 PAGE ===== */
.module-hero{min-height:72vh;display:flex;align-items:center;justify-content:center;text-align:center;position:relative;overflow:hidden;padding:calc(var(--nav-h) + 4rem) 1.2rem 5rem}
.module-hero .hero-content{max-width:850px}
.module-code{display:inline-flex;align-items:center;gap:.6rem;font-family:var(--font-mono);font-size:.72rem;letter-spacing:.22em;text-transform:uppercase;color:var(--accent-light);margin-bottom:1.2rem}
.module-code:before{content:'';width:28px;height:1px;background:var(--accent-light)}
.module-title{font-family:var(--font-serif);font-size:clamp(3.2rem,8vw,6.5rem);font-weight:300;line-height:.95;letter-spacing:-.03em;margin-bottom:1.3rem}
.module-title span{color:var(--accent-light);font-style:italic}
.module-intro{max-width:680px;margin:0 auto 2rem;color:var(--text-dim);font-size:1.05rem;line-height:1.8}
.axis-grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:1.5rem}
.axis-card{position:relative;background:var(--bg-main);border:1px solid var(--border);border-radius:var(--radius-lg);padding:2.4rem;overflow:hidden;transition:transform var(--transition),border-color var(--transition),box-shadow var(--transition)}
.axis-card:hover{transform:translateY(-5px);border-color:var(--border-hover);box-shadow:var(--shadow-lg)}
.axis-number{font-family:var(--font-mono);color:var(--accent-light);font-size:.72rem;letter-spacing:.18em;text-transform:uppercase;margin-bottom:1.2rem}
.axis-icon{width:52px;height:52px;display:flex;align-items:center;justify-content:center;border:1px solid rgba(113,90,90,.35);background:rgba(113,90,90,.12);border-radius:var(--radius-sm);color:var(--accent-light);margin-bottom:1.4rem}
.axis-icon svg{width:27px;height:27px}
.axis-title{font-family:var(--font-serif);font-size:2rem;font-weight:400;margin-bottom:.7rem}
.axis-desc{color:var(--text-dim);line-height:1.7;margin-bottom:1.4rem}
.axis-points{margin-bottom:1.6rem}
.axis-points li{color:var(--text-dim);padding:.55rem 0 .55rem 1.15rem;border-bottom:1px solid var(--border);position:relative}
.axis-points li:before{content:'→';position:absolute;left:0;color:var(--accent-light)}
.method-tag{display:inline-block;font-family:var(--font-mono);font-size:.68rem;color:var(--accent-light);background:rgba(113,90,90,.1);border:1px solid rgba(113,90,90,.25);padding:.25rem .65rem;border-radius:4px}
.resource-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:1rem}
.resource-card{display:flex;align-items:center;gap:1.1rem;background:var(--bg-secondary);border:1px solid var(--border);border-radius:var(--radius-md);padding:1.25rem;transition:transform var(--transition),border-color var(--transition),background var(--transition)}
.resource-card:hover{transform:translateY(-3px);border-color:var(--border-hover);background:rgba(68,68,78,.9)}
.resource-icon{width:45px;height:45px;flex:0 0 45px;border:1px solid rgba(113,90,90,.3);border-radius:var(--radius-sm);display:flex;align-items:center;justify-content:center;color:var(--accent-light);background:rgba(113,90,90,.1)}
.resource-icon svg{width:20px;height:20px}
.resource-content{flex:1;min-width:0}
.resource-title{font-size:1rem;font-weight:500;color:var(--text-light);margin-bottom:.2rem}
.resource-desc{font-size:.78rem;color:var(--text-muted)}
.project-links{display:flex;flex-wrap:wrap;gap:.75rem;margin-top:.65rem}
.project-links a{font-size:.82rem;color:var(--accent-light)}
.project-links a:hover{color:var(--text-light);text-decoration:underline}
.resource-arrow{color:var(--text-muted);transition:transform var(--transition),color var(--transition)}
.resource-card:hover .resource-arrow{color:var(--accent-light);transform:translateX(3px)}
.section-alt{background:var(--bg-secondary)}
@media(max-width:700px){.axis-grid{grid-template-columns:1fr}.axis-card{padding:1.7rem}.module-hero{min-height:78vh}}
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

.module-hero {
  isolation: isolate;
  background: var(--color-bg) !important;
}

.module-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: 0;
  background:
    linear-gradient(180deg, rgba(5, 10, 27, 0.52) 0%, rgba(5, 10, 27, 0.42) 58%, #050A1B 100%),
    linear-gradient(90deg, rgba(5, 10, 27, 0.55), rgba(5, 10, 27, 0.16) 50%, rgba(5, 10, 27, 0.55)),
    url("/images/room.webp") center 46% / cover no-repeat;
  box-shadow: inset 0 0 110px 35px rgba(5, 10, 27, 0.72);
  pointer-events: none;
}

.module-hero .hero-noise {
  z-index: 1;
}

.module-hero .hero-glow {
  z-index: 1;
}

.module-hero .hero-content {
  z-index: 3;
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
  <a class="brand-logo nav-logo" href="index.php" aria-label="Accueil — Houssam Chelha">
    <span class="brand-orbit">
      <img src="/images/logo-projet.png" alt="Logo du portfolio Houssam Chelha">
      <span class="brand-particle"></span><span class="brand-particle"></span>
      <span class="brand-particle"></span><span class="brand-particle"></span>
    </span>
  </a>
  <button class="nav-toggle" id="navToggle" aria-label="Ouvrir le menu"><span></span><span></span><span></span></button>
  <ul class="nav-links" id="navLinks">
    <li><a href="index.php">Accueil</a></li>
    <li><a href="#axes">Les 2 axes</a></li>
    <li><a href="#projets">Projets</a></li>
    <li><a href="#ateliers">Ateliers</a></li>
  </ul>
</nav>

<main>
<section class="module-hero">
  <div class="hero-noise"></div><div class="hero-glow"></div>
  <div class="hero-content">
    <div class="module-code">M202 / Gestion de projet</div>
    <h1 class="module-title">Approche <span>Agile</span></h1>
    <p class="module-intro">Un espace dédié aux méthodes de gestion de projet étudiées pendant la formation : le modèle en cascade et l'approche Agile Scrum.</p>
    <div class="hero-actions">
      <a href="#axes" class="btn btn-primary">Découvrir les 2 axes <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
      <a href="#projets" class="btn btn-ghost">Voir les travaux</a>
    </div>
  </div>
</section>

<section class="section about" id="axes">
<div class="container">
  <div class="section-header"><span class="section-tag">01 / Les deux axes</span><h2 class="section-title">Deux façons de gérer un projet</h2></div>
  <div class="axis-grid">
    <article class="axis-card reveal">
      <div class="axis-number">Axe 01 / Modèle classique</div>
      <div class="axis-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 19h16M5 15l4-4 3 3 7-8"/><path d="M17 6h2v2"/></svg></div>
      <h3 class="axis-title">Modèle en cascade</h3>
      <p class="axis-desc">Une démarche séquentielle dans laquelle les différentes étapes du projet sont réalisées dans un ordre défini.</p>
      <ul class="axis-points"><li>Planification du projet</li><li>Analyse des besoins</li><li>Conception et développement</li><li>Tests puis livraison</li></ul>
      <span class="method-tag">Waterfall</span>
    </article>
    <article class="axis-card reveal">
      <div class="axis-number">Axe 02 / Méthode agile</div>
      <div class="axis-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 11a8 8 0 0 0-14.9-4M4 5v5h5"/><path d="M4 13a8 8 0 0 0 14.9 4M20 19v-5h-5"/></svg></div>
      <h3 class="axis-title">Agile Scrum</h3>
      <p class="axis-desc">Une approche itérative et collaborative qui permet de faire évoluer le projet progressivement grâce aux sprints et aux retours réguliers.</p>
      <ul class="axis-points"><li>Product Backlog</li><li>Sprint et Sprint Backlog</li><li>Daily Scrum</li><li>Review et rétrospective</li></ul>
      <span class="method-tag">Agile / Scrum</span>
    </article>
  </div>
</div>
</section>

<section class="section section-alt" id="projets">
<div class="container">
  <div class="section-header"><span class="section-tag">02 / Projets</span><h2 class="section-title">Mes projets</h2></div>
  <div class="resource-grid">
    <article class="resource-card reveal"><div class="resource-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 9h18l-2 11H5L3 9Z"/><path d="M7 9l5-6 5 6M9 13v3M15 13v3"/></svg></div><div class="resource-content"><h3 class="resource-title">Mawjoud Marketplace</h3><p class="resource-desc">Découvrir le projet ou consulter son code source.</p><div class="project-links"><a href="https://mawjoud-marketplace.vercel.app/" target="_blank" rel="noopener noreferrer">Voir le site</a><a href="https://github.com/houssamchelha-commits/Mawjoud" target="_blank" rel="noopener noreferrer">Voir le projet sur GitHub</a></div></div></article>
  </div>
</div>
</section>

<section class="section" id="ateliers">
<div class="container">
  <div class="section-header"><span class="section-tag">03 / Ateliers</span><h2 class="section-title">Travaux pratiques</h2></div>
  <div class="resource-grid">
    <a class="resource-card reveal" href="/docs/Atelier_1.pdf"><div class="resource-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 3v18M3 12h18"/></svg></div><div class="resource-content"><h3 class="resource-title">Atelier 1 — Gestion de projet : Méthodes classiques</h3><p class="resource-desc">Support de l'atelier sur les méthodes classiques de gestion de projet</p><span class="resource-desc">Télécharger le PDF</span></div><span class="resource-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span></a>
    <a class="resource-card reveal" href="/docs/Atelier_2.pdf"><div class="resource-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="5" width="16" height="14" rx="2"/><path d="M8 9h8M8 13h5"/></svg></div><div class="resource-content"><h3 class="resource-title">Atelier 2 — Gestion de projet : Agile Scrum</h3><p class="resource-desc">Support de l'atelier sur le framework Agile Scrum</p><span class="resource-desc">Télécharger le PDF</span></div><span class="resource-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span></a>
    <a class="resource-card reveal" href="/docs/Atelier_3.pdf"><div class="resource-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="8"/><path d="M12 8v4l3 2"/></svg></div><div class="resource-content"><h3 class="resource-title">Atelier 3 — Les bases de Git</h3><p class="resource-desc">Support de l'atelier sur les bases de Git</p><span class="resource-desc">Télécharger le PDF</span></div><span class="resource-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span></a>
    <a class="resource-card reveal" href="/docs/Atelier_4.pdf"><div class="resource-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 4h12v16H6z"/><path d="M9 8h6M9 12h6M9 16h4"/></svg></div><div class="resource-content"><h3 class="resource-title">Atelier 4 — GitHub</h3><p class="resource-desc">Support de l'atelier sur GitHub</p><span class="resource-desc">Télécharger le PDF</span></div><span class="resource-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span></a>
    <a class="resource-card reveal" href="/docs/Atelier_5.pdf"><div class="resource-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 4h12v16H6z"/><path d="M9 8h6M9 12h6M9 16h4"/></svg></div><div class="resource-content"><h3 class="resource-title">Atelier 5 — Git (exemple EFM)</h3><p class="resource-desc">Support de l'atelier sur Git avec un exemple EFM</p><span class="resource-desc">Télécharger le PDF</span></div><span class="resource-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg></span></a>
  </div>
</div>
</section>
</main>

<footer class="footer"><div class="container"><div class="footer-content"><a class="brand-logo footer-logo" href="index.php" aria-label="Accueil — Houssam Chelha"><span class="brand-orbit"><img src="/images/logo-projet.png" alt="Logo du portfolio Houssam Chelha"><span class="brand-particle"></span><span class="brand-particle"></span><span class="brand-particle"></span><span class="brand-particle"></span></span></a><p class="footer-text">Approche Agile — Portfolio</p><a class="footer-made" href="index.php">← Retour au portfolio</a></div></div></footer>

<script>
const navbar=document.getElementById('navbar'),navToggle=document.getElementById('navToggle'),navLinks=document.getElementById('navLinks');
window.addEventListener('scroll',()=>navbar.classList.toggle('scrolled',window.scrollY>30));
navToggle.addEventListener('click',()=>{navToggle.classList.toggle('active');navLinks.classList.toggle('open')});
navLinks.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{navToggle.classList.remove('active');navLinks.classList.remove('open')}));
const observer=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('visible');observer.unobserve(e.target)}}),{threshold:.12});
document.querySelectorAll('.reveal,.section-header').forEach(e=>observer.observe(e));
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
