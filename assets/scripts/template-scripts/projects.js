(()=>{var e;(e=jQuery).fn.moreLess=function(t){var s=e.extend({moreLabel:"Read more",lessLabel:"Read less",moreClass:"",lessClass:"",wordsCount:50},t);function o(e,t){var o=e.html().trim().split(/\s+/);o.length>s.wordsCount&&(o.splice(s.wordsCount,9e9),o.push('<a href="#" data-id="'+t+'" class="moreless-expand-content '+s.moreClass+'">'+s.moreLabel+"</a>")),e.html((new DOMParser).parseFromString(o.join(" "),"text/html").body.innerHTML)}var n=[],r=[];this.each((function(t){var s=e(this);n.push(s.html()),r.push(s),o(s,t)})),e(document).on("click",".moreless-expand-content",(function(t){t.preventDefault();var o=e(this).attr("data-id");r[o].html(n[o]+'<a href="#" data-id="'+o+'" class="moreless-collapse-content '+s.lessClass+'">'+s.lessLabel+"</a>")})),e(document).on("click",".moreless-collapse-content",(function(t){t.preventDefault();var s=e(this).attr("data-id");o(r[s],s)}))}})(),jQuery(document).ready((function(e){e(".project__description").moreLess({wordsCount:function(){let t,s=e(window).width();return t=s>=992&&s<1140?65:s>=576&&s<992?30:s<576?10:70,t}(),moreLabel:'...<button class="button read-more_button read-more_button-mobile">Читати більше<svg class="arrow-icon"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.46967 5.46967C5.76256 5.17678 6.23744 5.17678 6.53033 5.46967L18.25 17.1893V6.52C18.25 6.10579 18.5858 5.77 19 5.77C19.4142 5.77 19.75 6.10579 19.75 6.52V19C19.75 19.4142 19.4142 19.75 19 19.75H6.52C6.10579 19.75 5.77 19.4142 5.77 19C5.77 18.5858 6.10579 18.25 6.52 18.25H17.1893L5.46967 6.53033C5.17678 6.23744 5.17678 5.76256 5.46967 5.46967Z" fill="#4E4E4E"/></svg></button>',lessLabel:'<button class="button read-less_button read-more_button read-more_button-mobile">Сховати<svg class="arrow-icon"><path d="M18 6L6 18" stroke="#070707" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 6L18 18" stroke="#070707" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></button>',moreClass:"more-link",lessClass:"less-link"})}));