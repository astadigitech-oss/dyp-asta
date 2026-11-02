import {
    createIcons,
    ArrowRight,
    BadgeCheck,
    Briefcase,
    ChevronDown,
    ExternalLink,
    Eye,
    FileSearch,
    House,
    Mail,
    MapPin,
    Phone,
    PhoneCall,
    Rocket,
    ShieldCheck,
} from "lucide";
import Alpine from "alpinejs";
import Splide from "@splidejs/splide";
import { AutoScroll } from "@splidejs/splide-extension-auto-scroll";
import "@splidejs/splide/css";

// Hanya ikon yang dipakai di view (data-lucide="..."). Tambahkan di sini kalau memakai ikon baru,
// termasuk ikon menu di config/navigation.php.
createIcons({
    icons: {
        ArrowRight,
        BadgeCheck,
        Briefcase,
        ChevronDown,
        ExternalLink,
        Eye,
        FileSearch,
        House,
        Mail,
        MapPin,
        Phone,
        PhoneCall,
        Rocket,
        ShieldCheck,
    },
});

// Video dengan data-autoplay baru diunduh & diputar saat terlihat di layar.
// Video di dalam elemen yang disembunyikan (mis. versi mobile di desktop) tidak pernah diunduh.
const videoObserver = new IntersectionObserver((entries) => {
    entries.forEach(({ target, isIntersecting }) => {
        if (isIntersecting) {
            target.play().catch(() => {});
        } else {
            target.pause();
        }
    });
});
document.querySelectorAll("video[data-autoplay]").forEach((video) => videoObserver.observe(video));

// Dipakai oleh script inline di view (new Splide(...))
window.Splide = Splide;
window.SplideExtensions = { AutoScroll };

// Ikon dibuat sebelum Alpine start, supaya binding Alpine (mis. :class) menempel di <svg> hasil Lucide
window.Alpine = Alpine;

Alpine.start();
