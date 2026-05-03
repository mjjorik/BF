
(function() {
    if (!document.body.classList.contains('page-wedding')) return;
    
// SCROLL PROGRESS
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100,100)+'%';},{passive:true});

// SCROLL REVEAL & STAGGER
const ro=new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      e.target.classList.add('on');
      ro.unobserve(e.target);
    }
  });
},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r,.rc').forEach(el=>ro.observe(el));

// GRID STAGGER LOGIC
document.querySelectorAll('.r-grid').forEach(grid=>{
  const io=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.querySelectorAll(':scope > *').forEach((child,i)=>{
          child.style.transitionDelay=(i*.08)+'s';
          child.classList.add('on');
        });
        io.unobserve(e.target);
      }
    });
  },{threshold:.15});
  io.observe(grid);
});

// STATEMENT LINE DRAW
const line=document.querySelector('.statement-line');
if(line){
  const lineIo=new IntersectionObserver(e=>{if(e[0].isIntersecting){line.classList.add('on');lineIo.disconnect();}});
  lineIo.observe(line);
}

// JS Page Logic
(function(){
  var lang=document.getElementById('langSwitcher');
  if(lang){
    var btn=lang.querySelector('.lang-btn');
    btn.addEventListener('click',function(e){e.stopPropagation();lang.classList.toggle('open');btn.setAttribute('aria-expanded',lang.classList.contains('open'));});
    document.addEventListener('click',function(e){if(!lang.contains(e.target))lang.classList.remove('open');});
  }
})();

// WA FLOAT
window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>400);},{passive:true});

// GALLERY DRAG SCROLL
const gs=document.getElementById('galleryScroll');
if(gs){
  const dots=document.querySelectorAll('.gallery-dot');
  let isDown=false,startX,scrollLeft;
  gs.addEventListener('mousedown',e=>{isDown=true;gs.classList.add('grabbing');startX=e.pageX-gs.offsetLeft;scrollLeft=gs.scrollLeft;});
  gs.addEventListener('mouseleave',()=>{isDown=false;gs.classList.remove('grabbing');});
  gs.addEventListener('mouseup',()=>{isDown=false;gs.classList.remove('grabbing');});
  gs.addEventListener('mousemove',e=>{if(!isDown)return;e.preventDefault();const x=e.pageX-gs.offsetLeft;const walk=(x-startX)*1.5;gs.scrollLeft=scrollLeft-walk;});
  gs.addEventListener('scroll',()=>{
    const items=gs.querySelectorAll('.gallery-item');
    if(items.length>0&&dots.length>0){
      const scrollRatio=gs.scrollLeft/(gs.scrollWidth-gs.clientWidth);
      const active=Math.round(scrollRatio*(items.length-1));
      dots.forEach((d,i)=>d.classList.toggle('active',i===active));
    }
  },{passive:true});
}

// FAQ ACCORDION
document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const isOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!isOpen)item.classList.add('open');
  });
});

// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const target=document.querySelector(a.getAttribute('href'));
    if(target){e.preventDefault();target.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});

// FORM LOGIC
const bfForm=document.querySelector('.bf-form');
const bfSuccess=document.querySelector('.form-success');
if(bfForm){
  bfForm.addEventListener('submit',e=>{
    e.preventDefault();
    bfForm.style.display='none';
    bfSuccess.classList.add('active');
  });
}

// CART
(function(){const count=0;const badge=document.getElementById('cartCount');const mBadge=document.getElementById('mCartCount');if(count>0){if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}if(mBadge){mBadge.textContent=count;mBadge.style.display='flex';}}})();

})();
