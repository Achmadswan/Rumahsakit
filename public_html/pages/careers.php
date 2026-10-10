<?php
require_once __DIR__ . '/../config/database.php';

// Ensure CSS is loaded inline (no external CDN)
$css_file = __DIR__ . '/../assets/css/careers.css';
?>
<style>
    <?php if(file_exists($css_file)) include $css_file; ?>
</style>

<div class="careers-page-container">
    <!-- HERO SECTION -->
    <section class="careers-hero">
        <div class="container fade-up-element visible">
            <div class="hero-text-content">
                <h6 style="color: var(--secondary-color); font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;">Bergabunglah dengan Kami</h6>
                <h1>Karir Medis & Non‑Medis Premium</h1>
                <p>Rumah Sakit kami berkomitmen pada standar internasional JCI, teknologi terkini, serta kesejahteraan karyawan. Temukan peran yang cocok dan tumbuh bersama kami.</p>
                <a href="#jobs" class="btn-submit" style="display: inline-block; padding: 14px 40px; font-size: 1.1rem; box-shadow: 0 10px 20px rgba(0,0,0,0.3);">Lihat Lowongan</a>
            </div>
        </div>
    </section>

    <!-- WHY JOIN US -->
    <section class="why-join-section">
        <div class="container fade-up-element">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l9 21H3L12 2z"></path></svg>
                        </div>
                        <h4>Fasilitas Terkini</h4>
                        <p>Laboratorium, ruang operasi, dan ICU berstandar internasional.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                        </div>
                        <h4>Pengembangan Karir</h4>
                        <p>Program fellowship, beasiswa, dan pelatihan berkelanjutan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                        </div>
                        <h4>Kesejahteraan Karyawan</h4>
                        <p>Asuransi kesehatan premium, cuti melahirkan, dan program kebugaran.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12l2 2 4-4 6 6 5-5"></path></svg>
                        </div>
                        <h4>Lingkungan Kolaboratif</h4>
                        <p>Tim multidisiplin yang mendukung inovasi dan research.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CATEGORIES SECTION -->
    <section class="categories-section">
        <div class="container fade-up-element">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="category-box">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 0 0 0 20 10 10 0 0 0 0-20z"></path></svg>
                        <h4>Medis Klinis</h4>
                        <p>Dokter Spesialis, Dokter Umum, Perawat, Bidan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-box">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"></path></svg>
                        <h4>Penunjang Medis</h4>
                        <p>Apoteker, Teknisi Radiologi, Analis Lab, Gizi.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-box">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect></svg>
                        <h4>Manajemen</h4>
                        <p>HR, Keuangan, IT, Operasional.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="category-box">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12h20"></path><path d="M12 2v20"></path></svg>
                        <h4>Penelitian & Edukasi</h4>
                        <p>Peneliti, Dosen, Koordinator Pendidikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JOB BOARD SECTION -->
    <section class="jobs-section" id="jobs">
        <div class="container fade-up-element">
            <h2 class="text-center mb-5" style="color: var(--primary-color);">Lowongan Terbuka</h2>
    <div class="counter" id="jobCounter">0 Lowongan</div>
    <div class="filter-bar">
        <select id="categoryFilter">
            <option value="all">Semua</option>
            <option value="medis">Medis Klinis</option>
            <option value="penunjang">Penunjang Medis</option>
            <option value="manajemen">Manajemen</option>
            <option value="penelitian">Penelitian & Edukasi</option>
        </select>
    </div>
            <!-- Job Card Example -->
            <div class="job-card">
                <div class="job-details">
                    <h3>Spesialis Kardiologi (Full‑time)</h3>
                    <div class="job-meta">
                        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 0 0 0 20"></path></svg> Departemen Jantung</span>
                        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4"></path></svg> Jakarta – SCBD</span>
                        <span><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 6h8"></path><path d="M8 12h8"></path><path d="M8 18h8"></path></svg> Full‑time</span>
                    </div>
                </div>
                <div class="job-action">
                    <a href="https://wa.me/62811999888?text=Saya%20ingin%20melamar%20Spesialis%20Kardiologi" target="_blank" class="btn-apply">Lamar via WA</a>
                </div>
            </div>
            <div class="job-card">
                <div class="job-details">
                    <h3>Perawat ICU (Shift)</h3>
                    <div class="job-meta">
                        <span>Departemen ICU</span>
                        <span>Jakarta – SCBD</span>
                        <span>Shift</span>
                    </div>
                </div>
                <div class="job-action">
                    <a href="https://wa.me/62811999888?text=Saya%20ingin%20melamar%20Perawat%20ICU" target="_blank" class="btn-apply">Lamar via WA</a>
                </div>
            </div>
            <div class="job-card">
                <div class="job-details">
                    <h3>IT System Analyst (Part‑time)</h3>
                    <div class="job-meta">
                        <span>Departemen IT</span>
                        <span>Jakarta – SCBD</span>
                        <span>Part‑time</span>
                    </div>
                </div>
                <div class="job-action">
                    <a href="https://wa.me/62811999888?text=Saya%20ingin%20melamar%20IT%20System%20Analyst" target="_blank" class="btn-apply">Lamar via WA</a>
                </div>
            </div>
            <!-- Add more job‑cards as needed -->
        </div>
    </section>

    <!-- HIRING PROCESS SECTION -->
    <section class="process-section">
        <div class="container fade-up-element">
            <h2 class="text-center mb-5" style="color: var(--primary-color);">Proses Rekrutmen</h2>
            <div class="timeline-row">
                <div class="timeline-step">
                    <div class="timeline-icon">1</div>
                    <h5>Seleksi CV</h5>
                    <p>Tim HR meninjau CV dan menghubungi kandidat potensial.</p>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon">2</div>
                    <h5>Wawancara HR</h5>
                    <p>Menilai soft‑skill, budaya kerja, dan motivasi.</p>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon">3</div>
                    <h5>Tes Kompetensi</h5>
                    <p>Ujian teknis atau klinis sesuai posisi.</p>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon">4</div>
                    <h5>Medical Check‑Up</h5>
                    <p>Pemeriksaan kesehatan standar perusahaan.</p>
                </div>
                <div class="timeline-step">
                    <div class="timeline-icon">5</div>
                    <h5>Penawaran & Onboarding</h5>
                    <p>Surat penawaran resmi diikuti orientasi awal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial-section">
        <div class="container fade-up-element">
            <h2 class="text-center mb-5" style="color: var(--primary-color);">Kisah Karyawan Kami</h2>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="testi-card">
                        <svg class="testi-icon" viewBox="0 0 24 24"><path d="M9 9h6v6H9z"></path></svg>
                        <p class="testi-text">"Bergabung di sini memberi saya akses ke teknologi medis tercanggih dan program pelatihan internasional yang memajukan karir saya. Lingkungan kerja sangat kolaboratif dan suportif."</p>
                        <div class="testi-author">
                            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80" alt="Dr. Siti">
                            <div>
                                <strong>Dr. Siti, Spesialis Kardiologi</strong><br>
                                <small>2018 – Sekarang</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-card">
                        <svg class="testi-icon" viewBox="0 0 24 24"><path d="M9 9h6v6H9z"></path></svg>
                        <p class="testi-text">"Program beasiswa dan fellowship yang disediakan membantu saya menambah kompetensi internasional. Manajemen sangat transparan dan peduli pada kesejahteraan karyawan."</p>
                        <div class="testi-author">
                            <img src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&w=100&q=80" alt="Budi">
                            <div>
                                <strong>Budi, Perawat ICU</strong><br>
                                <small>2020 – Sekarang</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="testi-card">
                        <svg class="testi-icon" viewBox="0 0 24 24"><path d="M9 9h6v6H9z"></path></svg>
                        <p class="testi-text">"Sebagai IT System Analyst, saya mendapat kebebasan berinovasi dengan dukungan infrastruktur cloud‑native. Kultur perusahaan mendorong kolaborasi lintas‑departemen."</p>
                        <div class="testi-author">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=100&q=80" alt="Rina">
                            <div>
                                <strong>Rina, IT Analyst</strong><br>
                                <small>2019 – Sekarang</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FRAUD ALERT -->
    <section class="fraud-alert fade-up-element">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 0 0 0 20 10 10 0 0 0 0-20z"></path><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12" y2="16"></line></svg>
        <p><strong>Peringatan:</strong> Rumah sakit kami tidak pernah meminta biaya apapun (tiket, visa, atau administrasi) dalam proses rekrutmen. Waspadai penipuan.</p>
    </section>
</div>

<script>
    // Simple fade‑up animation on scroll (same as other pages)
    document.addEventListener("DOMContentLoaded", function(){
        const observer = new IntersectionObserver((entries)=>{
            entries.forEach(entry=>{ if(entry.isIntersecting){ entry.target.classList.add('visible'); observer.unobserve(entry.target);} });
        },{threshold:0.1, rootMargin:"0px 0px -50px 0px"});
        document.querySelectorAll('.fade-up-element').forEach(el=>observer.observe(el));
    });
</script>
