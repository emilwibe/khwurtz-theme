"use strict";var toggleNavigation=function(){var e=document.getElementById("nav-toggle"),t=document.getElementById("nav-primary");e.addEventListener("click",(function(){t.classList.toggle("is-hidden")}),!1)};toggleNavigation();var ewHorizontalScroll=function(){var e,t=0,n=document.getElementById("featured-slider");document.addEventListener("wheel",(function(l){window.innerWidth>680&&(e=n.scrollWidth-n.clientWidth,t+l.deltaX+l.deltaY>=0&&t+l.deltaX+l.deltaY<=e&&(t+=l.deltaX+l.deltaY,n.scrollLeft=t))}),!1,{passive:!0})};ewHorizontalScroll();
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNjcmlwdHMtZm9vdGVyLmpzIl0sIm5hbWVzIjpbInRvZ2dsZU5hdmlnYXRpb24iLCJuYXZUb2dnbGUiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibmF2UHJpbWFyeSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImV3SG9yaXpvbnRhbFNjcm9sbCIsInNjcm9sbE1heCIsImZlYXR1cmVkU2xpZGVyIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJzY3JvbGxOdW0iLCJzY3JvbGxXaWR0aCIsImNsaWVudFdpZHRoIiwiZGVsdGFYIiwiZGVsdGFZIiwicGFzc2l2ZSJdLCJtYXBwaW5ncyI6ImFBQUEsSUFBQUEsaUJBQUEsV0FDQSxJQURBQyxFQUFBQyxTQUFBQyxlQUFBLGNBQ0FDLEVBQUFGLFNBQUFDLGVBQUEsZUFNQUMsRUFBQUEsaUJBQUFBLFNBQUFBLFdBQ0FBLEVBQUFDLFVBQUFDLE9BQUEsZ0JBQ0EsSUFFQU4sbUJBR0EsSUFBQU8sbUJBQUEsV0FBQSxJQUFBQyxFQU1BTixFQUFBQSxFQUNBTyxFQUFBUCxTQUFBQyxlQUFBLG1CQUdBRCxTQUFBUSxpQkFBQSxTQUFBLFNBQUFDLEdBQ0FDLE9BQUFBLFdBQUFBLE1BRUFKLEVBQUFDLEVBQUFJLFlBQUFKLEVBQUFLLFlBRUFGLEVBQUFELEVBQUFJLE9BQUFKLEVBQUFLLFFBQUEsR0FBQUosRUFBQUQsRUFBQUksT0FBQUosRUFBQUssUUFBQVIsSUFFQUksR0FBQUQsRUFBQUksT0FBQUosRUFBQUssT0FBQUMsRUFBQUEsV0FBQUEsT0FBQSxFQUFBLENBQUFBLFNBQUEsS0FHQVYiLCJmaWxlIjoic2NyaXB0cy1mb290ZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyJjb25zdCB0b2dnbGVOYXZpZ2F0aW9uID0gKCkgPT4ge1xuICBjb25zdFxuICAgIG5hdlRvZ2dsZSA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCBcIm5hdi10b2dnbGVcIiApLFxuICAgIG5hdlByaW1hcnkgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCggXCJuYXYtcHJpbWFyeVwiIClcbiAgO1xuXG4gIG5hdlRvZ2dsZS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT4ge1xuICAgIG5hdlByaW1hcnkuY2xhc3NMaXN0LnRvZ2dsZSggXCJpcy1oaWRkZW5cIiApO1xuICB9LCBmYWxzZSk7XG59XG5cbnRvZ2dsZU5hdmlnYXRpb24oKTtcblxuY29uc3QgZXdIb3Jpem9udGFsU2Nyb2xsID0gKCkgPT4ge1xuICBsZXRcbiAgICBzY3JvbGxNYXgsXG4gICAgc2Nyb2xsTnVtID0gMCxcbiAgICBmZWF0dXJlZFNsaWRlciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiZmVhdHVyZWQtc2xpZGVyXCIpXG4gIDtcblxuICBkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKFwid2hlZWxcIiwgZnVuY3Rpb24gKGUpIHtcbiAgICBpZiAoIHdpbmRvdy5pbm5lcldpZHRoID4gNjgwICkge1xuXG4gICAgICBzY3JvbGxNYXggPSBmZWF0dXJlZFNsaWRlci5zY3JvbGxXaWR0aCAtIGZlYXR1cmVkU2xpZGVyLmNsaWVudFdpZHRoO1xuICAgICAgaWYgKHNjcm9sbE51bSArIGUuZGVsdGFYICsgZS5kZWx0YVkgPj0gMCAmJiBzY3JvbGxOdW0gKyBlLmRlbHRhWCArIGUuZGVsdGFZIDw9IHNjcm9sbE1heCkge1xuICAgICAgICBzY3JvbGxOdW0gKz0gZS5kZWx0YVggKyBlLmRlbHRhWTtcbiAgICAgICAgZmVhdHVyZWRTbGlkZXIuc2Nyb2xsTGVmdCA9IHNjcm9sbE51bTtcbiAgICAgIH1cblxuICAgIH1cblxuICB9LCBmYWxzZSwgeyBwYXNzaXZlOiB0cnVlIH0pO1xufVxuXG5ld0hvcml6b250YWxTY3JvbGwoKTsiXX0=