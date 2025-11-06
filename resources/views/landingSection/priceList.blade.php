 <section id="pricing" class="pricing">
        <h2 class="section-title">মূল্য তালিকা</h2>
        <p class="section-subtitle">আপনার বাজেট অনুযায়ী নির্বাচন করুন</p>
        <style>
            /* Carousel styles scoped to #pricing */
            #pricing{padding: 6rem 5%}
            #pricing .carousel{position:relative; max-width:1400px; margin:0 auto; overflow:visible}
            #pricing .viewport{overflow:hidden}
            #pricing .track{display:flex; gap:12px; scroll-behavior:smooth;}
            #pricing .viewport{cursor:grab}
            #pricing .viewport.dragging{cursor:grabbing}
            /* Show 4 on desktop, 3 on large laptop, 2 on tablet, 1 on mobile */
            #pricing .track > .slide{min-width:calc(25% - 9px)}
            @media (max-width: 1280px){ #pricing .track > .slide{min-width:calc(33.333% - 8px)} }
            @media (max-width: 1024px){ #pricing .track > .slide{min-width:calc(50% - 6px)} }
            @media (max-width: 640px){ #pricing .track > .slide{min-width:100%} }

            /* Card refinement */
            #pricing .pricing-card{padding:1.25rem; border-radius:14px; box-shadow:0 8px 22px rgba(0,0,0,.08); transition:transform .25s ease, box-shadow .25s ease; text-align:left; display:flex; flex-direction:column; height:100%; min-height:390px; margin:24px 0 6px; padding-top:40px; padding-bottom:40px}
            #pricing .pricing-card:hover{transform:translateY(-6px); box-shadow:0 14px 34px rgba(0,0,0,.12)}
            #pricing .pricing-card h3{font-size:1.1rem; margin-top:6px; margin-bottom:.75rem}
            #pricing .pricing-card .price{font-size:1.6rem; margin-bottom:.5rem}
            #pricing .pricing-card .price-details{font-size:.9rem; margin-bottom:1rem}
            /* Slight indent for first three lines */
            #pricing .pricing-card h3,
            #pricing .pricing-card .price,
            #pricing .pricing-card .price-details{ padding-left:30px }
            #pricing .pricing-card .price-list{margin-top:6px; margin-bottom:1rem; flex-grow:1; padding-left:30px}
            #pricing .pricing-card .price-list li{font-size:.92rem; padding:.55rem 0}
            #pricing .pricing-card .btn{padding:.7rem 1.25rem; border-radius:10px; font-size:.95rem; margin-top:auto; align-self:flex-start; margin-bottom:30px; margin-left:30px}

            /* Responsive min-heights */
            @media (max-width: 1024px){ #pricing .pricing-card{ min-height:360px } }
            @media (max-width: 640px){ #pricing .pricing-card{ min-height:340px } }

            /* Left align price and the text below (including list) */
            #pricing .pricing-card .price,
            #pricing .pricing-card .price-details,
            #pricing .pricing-card .price-list{ text-align:left }


            /* Featured adjustments remain, but compact */
            #pricing .pricing-card.featured{transform:scale(1.0)}

            /* Controls & dots */
            #pricing .ctrl{position:absolute; top:50%; transform:translateY(-50%); background:rgba(0,0,0,.45); color:#fff; border:none; width:36px; height:36px; border-radius:999px; display:flex; align-items:center; justify-content:center; cursor:pointer; z-index:2}
            #pricing .ctrl.prev{left:-10px}
            #pricing .ctrl.next{right:-10px}
            @media (max-width: 1024px){ #pricing .ctrl.prev{left:-8px} #pricing .ctrl.next{right:-8px} }
            @media (max-width: 640px){ #pricing .ctrl.prev{left:6px} #pricing .ctrl.next{right:6px} }
            #pricing .dots{display:flex; justify-content:center; gap:6px; margin-top:12px}
            #pricing .dot{width:7px; height:7px; border-radius:999px; background:#cbd5e1; cursor:pointer; transition:background-color .2s ease, transform .2s ease}
            #pricing .dot.active{background:#ffd700; transform:scale(1.1)}
        </style>
        <div class="carousel" id="pricingCarousel">
            <div class="viewport">
                <div class="track" id="pricingTrack">
                    <div class="slide">
                        <div class="pricing-card featured">
                            <h3>২০ কুড়া মালা (২.৫ কাঠা)</h3>
                            <div class="price">৮০,০০,০০০ টাকা</div>
                            <p class="price-details">০৩% ডাউন পেমেন্ট: ৩৫,০০০০০ টাকা</p>
                            <ul class="price-list">
                                <li>০৩ কিস্তি: ৪০,০০০০০ টাকা</li>
                                <li>০৫ কিস্তি: ৯,৪০,০০০০০ টাকা</li>
                                <li>১০ কিস্তি: ৯,৯৬,০০০০০ টাকা</li>
                                <li>২০ কিস্তি: ১,৩৮,০০০০০ টাকা</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">বুকিং করুন</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="pricing-card featured">
                            <h3>৩০ কুড়া মালা (৩.৭৫ কাঠা)</h3>
                            <div class="price">৮৮,০০,০০০ টাকা</div>
                            <p class="price-details">০৩% ডাউন পেমেন্ট: ৩৮,৪৯৯৯৯ টাকা</p>
                            <ul class="price-list">
                                <li>০৩ কিস্তি: ১০,৮৮৯৯৯ টাকা</li>
                                <li>০৫ কিস্তি: ১,০৩,০০০০০ টাকা</li>
                                <li>১০ কিস্তি: ১,৮৮,০৯৯৯৯ টাকা</li>
                                <li>২০ কিস্তি: ১,২৮,৮০০০০ টাকা</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">জনপ্রিয়</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="pricing-card featured">
                            <h3>৪০ কুড়া মালা (৫ কাঠা)</h3>
                            <div class="price">৮৬,০০,০০০ টাকা</div>
                            <p class="price-details">০৩% ডাউন পেমেন্ট: ৩৭,৫০০০০ টাকা</p>
                            <ul class="price-list">
                                <li>০৩ কিস্তি: ১৮,০০০০০ টাকা</li>
                                <li>০৫ কিস্তি: ৯,৭৮,০০০০০ টাকা</li>
                                <li>১০ কিস্তি: ৯,৭৮,০০০০০ টাকা</li>
                                <li>২০ কিস্তি: ১,২৭৮,০০০০০ টাকা</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">বুকিং করুন</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="pricing-card featured">
                            <h3>৫০ কুড়া মালা (৬.২৫ কাঠা)</h3>
                            <div class="price">৯৮,০০,০০০ টাকা</div>
                            <p class="price-details">০৩% ডাউন পেমেন্ট: ৪৫,০০০০০ টাকা</p>
                            <ul class="price-list">
                                <li>০৩ কিস্তি: ২০,০০০০০ টাকা</li>
                                <li>০৫ কিস্তি: ১২,৪০,০০০০০ টাকা</li>
                                <li>১০ কিস্তি: ১১,৯৬,০০০০০ টাকা</li>
                                <li>২০ কিস্তি: ১,৪৮,০০০০০ টাকা</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">বুকিং করুন</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="pricing-card featured">
                            <h3>৬০ কুড়া মালা (৭.৫ কাঠা)</h3>
                            <div class="price">১,১৫,০০,০০০ টাকা</div>
                            <p class="price-details">০৩% ডাউন পেমেন্ট: ৫৫,০০০০০ টাকা</p>
                            <ul class="price-list">
                                <li>০৩ কিস্তি: ২৫,০০০০০ টাকা</li>
                                <li>০৫ কিস্তি: ১৪,৪০,০০০০০ টাকা</li>
                                <li>১০ কিস্তি: ১৩,৯৬,০০০০০ টাকা</li>
                                <li>২০ কিস্তি: ১,৬৮,০০০০০ টাকা</li>
                            </ul>
                            <a href="#contact" class="btn btn-primary">বুকিং করুন</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dots" id="priceDots"></div>
        </div>
        <script>
            (function(){
                const track = document.getElementById('pricingTrack');
                const viewport = document.querySelector('#pricingCarousel .viewport');
                const slides = track ? Array.from(track.querySelectorAll('.slide')) : [];
                const prev = document.getElementById('pricePrev');
                const next = document.getElementById('priceNext');
                const dotsWrap = document.getElementById('priceDots');
                if(!track || !viewport || !slides.length) return;
                let idx = 0, timer;
                function setActive(i){ idx = (i+slides.length)%slides.length; update(); activateDot(); }
                function update(){
                    const target = slides[idx];
                    if (!target) return;
                    const left = target.offsetLeft; // position inside track
                    viewport.scrollTo({ left, behavior:'smooth' });
                }
                function activateDot(){ Array.from(dotsWrap.children).forEach((d,k)=> d.classList.toggle('active', k===idx)); }
                // dots
                slides.forEach((_, i)=>{ const d=document.createElement('div'); d.className='dot'+(i===0?' active':''); d.addEventListener('click', ()=>{ setActive(i); restart(); }); dotsWrap.appendChild(d); });
                function go(n){ setActive(idx+n); }
                function restart(){ clearInterval(timer); timer = setInterval(()=> go(1), 4000); }
                if (prev) prev.addEventListener('click', ()=>{ go(-1); restart(); });
                if (next) next.addEventListener('click', ()=>{ go(1); restart(); });
                window.addEventListener('resize', ()=> update());
                // Drag to scroll (mouse + touch)
                let isDown = false, startX = 0, startScroll = 0;
                function onDown(clientX){ isDown = true; viewport.classList.add('dragging'); startX = clientX; startScroll = viewport.scrollLeft; clearInterval(timer); }
                function onMove(clientX){ if(!isDown) return; const dx = clientX - startX; viewport.scrollLeft = startScroll - dx; }
                function onUp(){ if(!isDown) return; isDown = false; viewport.classList.remove('dragging'); restart(); }
                viewport.addEventListener('mousedown', (e)=> onDown(e.clientX));
                window.addEventListener('mousemove', (e)=> onMove(e.clientX));
                window.addEventListener('mouseup', onUp);
                viewport.addEventListener('mouseleave', onUp);
                viewport.addEventListener('touchstart', (e)=>{ const t=e.touches[0]; if(t) onDown(t.clientX); }, {passive:true});
                viewport.addEventListener('touchmove', (e)=>{ const t=e.touches[0]; if(t) onMove(t.clientX); }, {passive:true});
                viewport.addEventListener('touchend', onUp);
                // init
                setActive(0);
                restart();
            })();
        </script>
    </section>