<div id="home" class="tab-content">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-content">
                <div class="stat-info">
                    <h3>হোম</h3>
                    <div class="subtitle">ড্যাশবোর্ডের হোম সেকশন</div>
                </div>
                <div class="stat-icon blue">🏠</div>
            </div>
        </div>
    </div>
    <div id="home-features" style="margin-top:1rem;">
        <div class="table-card">
            <h2>আমাদের সুবিধা সমূহ</h2>
            <style>
                #home-features .features-form input[type="text"],
                #home-features .features-form textarea { height: 46px; padding:10px 12px; font-size:15px; border-radius:10px; }
                #home-features .features-grid-editor { display:grid; grid-template-columns:repeat(3,1fr); gap:12px; }
                #home-features .card-editor { border:1px solid #e5e7eb; border-radius:12px; padding:12px; background:#fafafa }
                #home-features .card-editor h4 { margin:0 0 8px; font-size:14px }
                @media (max-width: 960px){ #home-features .features-grid-editor{ grid-template-columns:1fr } }
            </style>
            <div class="features-form">
                <div class="features-grid-editor">
                    <div class="card-editor">
                        <h4>কার্ড ১</h4>
                        <input type="text" id="featIcon1" placeholder="আইকন (যেমন: 🏘️)" />
                        <input type="text" id="featTitle1" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc1" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ২</h4>
                        <input type="text" id="featIcon2" placeholder="আইকন (যেমন: 📋)" />
                        <input type="text" id="featTitle2" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc2" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৩</h4>
                        <input type="text" id="featIcon3" placeholder="আইকন (যেমন: 🎯)" />
                        <input type="text" id="featTitle3" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc3" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৪</h4>
                        <input type="text" id="featIcon4" placeholder="আইকন (যেমন: ✅)" />
                        <input type="text" id="featTitle4" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc4" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৫</h4>
                        <input type="text" id="featIcon5" placeholder="আইকন (যেমন: 🚗)" />
                        <input type="text" id="featTitle5" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc5" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                    <div class="card-editor">
                        <h4>কার্ড ৬</h4>
                        <input type="text" id="featIcon6" placeholder="আইকন (যেমন: 🌳)" />
                        <input type="text" id="featTitle6" placeholder="শিরোনাম" style="margin-top:8px;" />
                        <input type="text" id="featDesc6" placeholder="বিবরণ" style="margin-top:8px;" />
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveFeaturesBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetFeaturesBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const ids = ['1','2','3','4','5','6'];
                    const getInputs = () => ids.map(i=>({
                        icon: document.getElementById('featIcon'+i),
                        title: document.getElementById('featTitle'+i),
                        desc: document.getElementById('featDesc'+i)
                    }));
                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('featuresSettings')||'{}');
                            const items = Array.isArray(saved.items)? saved.items: [];
                            const inputs = getInputs();
                            inputs.forEach((g, idx)=>{
                                const it = items[idx] || {};
                                g.icon.value = it.icon || '';
                                g.title.value = it.title || '';
                                g.desc.value  = it.desc  || '';
                            });
                        }catch(e){}
                    }
                    function save(){
                        const inputs = getInputs();
                        const items = inputs.map(g=>({icon:g.icon.value, title:g.title.value, desc:g.desc.value}));
                        const payload = { items };
                        localStorage.setItem('featuresSettings', JSON.stringify(payload));
                        window.dispatchEvent(new StorageEvent('storage', {key:'featuresSettings', newValue: JSON.stringify(payload)}));
                    }
                    document.getElementById('saveFeaturesBtn').addEventListener('click', save);
                    document.getElementById('resetFeaturesBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('featuresSettings');
                        getInputs().forEach(g=>{ g.icon.value=''; g.title.value=''; g.desc.value=''; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'featuresSettings', newValue: null}));
                    });
                    getInputs().forEach(g=>{ ['input','change'].forEach(evt=>{
                        g.icon.addEventListener(evt, save); g.title.addEventListener(evt, save); g.desc.addEventListener(evt, save);
                    }); });
                    load();
                })();
            </script>
        </div>
    </div>

    <div id="home-hero" style="margin-top:1rem;">
        <div class="table-card">
            <h2>হির সেকশন</h2>
            <style>
                #home-hero .table-card input[type="text"],
                #home-hero .table-card input[type="url"],
                #home-hero .table-card select {
                    height: 48px;
                    padding: 10px 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
                #home-hero .table-card textarea {
                    min-height: 120px;
                    padding: 12px;
                    font-size: 16px;
                    border-radius: 10px;
                }
            </style>
            <div class="form-grid" style="display:grid; grid-template-columns:1fr; gap:16px; align-items:start;">
                <div>
                    <div class="form-group">
                        <label>শিরোনাম</label>
                        <input type="text" id="heroTitleInput" placeholder="হিরো শিরোনাম">
                    </div>
                    <div class="form-group">
                        <label>সাব-শিরোনাম</label>
                        <input type="text" id="heroSubtitleInput" placeholder="সাব-শিরোনাম">
                    </div>
                    <div class="form-row" style="display:grid; grid-template-columns:1fr 1fr; gap:12px;">
                        <div class="form-group">
                            <label>প্রাইমারি বাটন টেক্সট</label>
                            <input type="text" id="heroPrimaryTextInput" placeholder="মূল্য দেখুন">
                        </div>
                        <div class="form-group">
                            <label>প্রাইমারি বাটন লিংক</label>
                            <input type="text" id="heroPrimaryLinkInput" placeholder="#pricing">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন টেক্সট</label>
                            <input type="text" id="heroSecondaryTextInput" placeholder="যোগাযোগ করুন">
                        </div>
                        <div class="form-group">
                            <label>সেকেন্ডারি বাটন লিংক</label>
                            <input type="text" id="heroSecondaryLinkInput" placeholder="#contact">
                        </div>
                    </div>
                </div>
                <div>
                    <label style="display:block; margin-bottom:6px;">স্লাইড ইমেজ (৩টি)</label>
                    <div class="slides-upload" style="display:grid; grid-template-columns:repeat(3,1fr); gap:12px;">
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev1" alt="Slide 1" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh1" style="color:#94a3b8;">Slide 1</span>
                            </div>
                            <input type="file" id="heroSlideInput1" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev2" alt="Slide 2" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh2" style="color:#94a3b8;">Slide 2</span>
                            </div>
                            <input type="file" id="heroSlideInput2" accept="image/*" style="margin-top:6px;">
                        </div>
                        <div>
                            <div style="border:1px dashed #cbd5e1; border-radius:10px; overflow:hidden; aspect-ratio:16/9; background:#f8fafc; display:flex; align-items:center; justify-content:center;">
                                <img id="heroSlidePrev3" alt="Slide 3" style="max-width:100%; max-height:100%; display:none;" />
                                <span id="heroSlidePh3" style="color:#94a3b8;">Slide 3</span>
                            </div>
                            <input type="file" id="heroSlideInput3" accept="image/*" style="margin-top:6px;">
                        </div>
                    </div>
                </div>
                <div style="margin-top:14px; display:flex; gap:10px;">
                    <button id="saveHeroBtn" class="btn btn-primary" type="button">সেভ</button>
                    <button id="resetHeroBtn" class="btn btn-secondary" type="button">রিসেট</button>
                </div>
            </div>
            <script>
                (function(){
                    const qs = id => document.getElementById(id);
                    const inputs = {
                        title: qs('heroTitleInput'),
                        subtitle: qs('heroSubtitleInput'),
                        pText: qs('heroPrimaryTextInput'),
                        pLink: qs('heroPrimaryLinkInput'),
                        sText: qs('heroSecondaryTextInput'),
                        sLink: qs('heroSecondaryLinkInput')
                    };
                    const fileInputs = [qs('heroSlideInput1'), qs('heroSlideInput2'), qs('heroSlideInput3')];
                    const prevImgs = [qs('heroSlidePrev1'), qs('heroSlidePrev2'), qs('heroSlidePrev3')];
                    const phs = [qs('heroSlidePh1'), qs('heroSlidePh2'), qs('heroSlidePh3')];

                    function load(){
                        try{
                            const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                            if(saved.title) inputs.title.value = saved.title; else inputs.title.value='';
                            if(saved.subtitle) inputs.subtitle.value = saved.subtitle; else inputs.subtitle.value='';
                            if(saved.primaryText) inputs.pText.value = saved.primaryText; else inputs.pText.value='';
                            if(saved.primaryLink) inputs.pLink.value = saved.primaryLink; else inputs.pLink.value='';
                            if(saved.secondaryText) inputs.sText.value = saved.secondaryText; else inputs.sText.value='';
                            if(saved.secondaryLink) inputs.sLink.value = saved.secondaryLink; else inputs.sLink.value='';
                            const slides = Array.isArray(saved.slides)? saved.slides: [];
                            slides.forEach((src, i)=>{
                                if(src){ prevImgs[i].src = src; prevImgs[i].style.display='block'; phs[i].style.display='none'; }
                            });
                        }catch(e){ /* ignore */ }
                    }

                    function save(partial){
                        const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                        const next = Object.assign({}, saved, partial||{}, {
                            title: inputs.title.value,
                            subtitle: inputs.subtitle.value,
                            primaryText: inputs.pText.value,
                            primaryLink: inputs.pLink.value,
                            secondaryText: inputs.sText.value,
                            secondaryLink: inputs.sLink.value
                        });
                        localStorage.setItem('heroSettings', JSON.stringify(next));
                        window.dispatchEvent(new StorageEvent('storage', {key:'heroSettings', newValue: JSON.stringify(next)}));
                    }

                    function wireFile(i){
                        const input = fileInputs[i];
                        input?.addEventListener('change', (e)=>{
                            const f = e.target.files && e.target.files[0];
                            if(!f) return;
                            const url = URL.createObjectURL(f);
                            prevImgs[i].src = url; prevImgs[i].style.display='block'; phs[i].style.display='none';
                            const reader = new FileReader();
                            reader.onload = ()=>{
                                const saved = JSON.parse(localStorage.getItem('heroSettings')||'{}');
                                const slides = Array.isArray(saved.slides)? saved.slides: [];
                                slides[i] = reader.result;
                                save({slides});
                                URL.revokeObjectURL(url);
                            };
                            reader.readAsDataURL(f);
                        });
                    }

                    document.getElementById('saveHeroBtn').addEventListener('click', ()=> save());
                    document.getElementById('resetHeroBtn').addEventListener('click', ()=>{
                        localStorage.removeItem('heroSettings');
                        [inputs.title, inputs.subtitle, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(i=> i.value='');
                        prevImgs.forEach((img, i)=>{ img.src=''; img.style.display='none'; phs[i].style.display='block'; });
                        window.dispatchEvent(new StorageEvent('storage', {key:'heroSettings', newValue: null}));
                    });

                    [inputs.title, inputs.subtitle, inputs.pText, inputs.pLink, inputs.sText, inputs.sLink].forEach(inp=>{
                        inp.addEventListener('input', ()=> save());
                    });
                    for(let i=0;i<3;i++) wireFile(i);
                    load();
                })();
            </script>
        </div>
    </div>
    
</div>
