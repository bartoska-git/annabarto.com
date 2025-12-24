import React, { useEffect, useState } from 'react';
import { Menu, X } from 'lucide-react';
export function Navigation() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [activeSection, setActiveSection] = useState('portfolio');
  const navLinks = [{
    id: 'about',
    label: 'About'
  }, {
    id: 'portfolio',
    label: 'Portfolio'
  }, {
    id: 'writing',
    label: 'Writing'
  }, {
    id: 'capabilities',
    label: 'Capabilities'
  }, {
    id: 'testimonials',
    label: 'Testimonials'
  }];
  useEffect(() => {
    const handleScroll = () => {
      const sections = navLinks.map(link => document.getElementById(link.id));
      const scrollPosition = window.scrollY + 100;
      for (let i = sections.length - 1; i >= 0; i--) {
        const section = sections[i];
        if (section && section.offsetTop <= scrollPosition) {
          setActiveSection(navLinks[i].id);
          break;
        }
      }
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);
  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      const offset = 80;
      const elementPosition = element.offsetTop - offset;
      window.scrollTo({
        top: elementPosition,
        behavior: 'smooth'
      });
    }
    setIsMenuOpen(false);
  };
  return <>
      <nav className="fixed top-0 left-0 right-0 z-50 bg-warm-beige border-b border-olive-grey/10 shadow-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            {/* Left - Logo/Name */}
            <div className="flex-shrink-0">
              <button onClick={() => window.scrollTo({
              top: 0,
              behavior: 'smooth'
            })} className="font-outfit text-xl font-bold text-deep-espresso hover:text-soft-terracotta transition-colors">
                Anna Barto
              </button>
            </div>
            {/* Center - Navigation Links (Desktop) */}
            <div className="hidden md:flex items-center space-x-8">
              {navLinks.map(link => <button key={link.id} onClick={() => scrollToSection(link.id)} className="relative text-deep-espresso hover:text-olive-grey transition-colors font-medium group">
                  {link.label}
                  <span className={`absolute -bottom-1 left-1/2 transform -translate-x-1/2 w-1.5 h-1.5 rounded-full bg-soft-terracotta transition-opacity ${activeSection === link.id ? 'opacity-100' : 'opacity-0'}`}></span>
                </button>)}
            </div>
            {/* Right - CTA Button (Desktop) */}
            <div className="hidden md:block">
              <button onClick={() => scrollToSection('contact')} className="px-6 py-2 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium">
                Get in Touch
              </button>
            </div>
            {/* Mobile Menu Button */}
            <button onClick={() => setIsMenuOpen(!isMenuOpen)} className="md:hidden p-2 text-deep-espresso hover:text-olive-grey transition-colors" aria-label="Toggle menu">
              {isMenuOpen ? <X size={24} /> : <Menu size={24} />}
            </button>
          </div>
        </div>
      </nav>
      {/* Mobile Menu Overlay */}
      <div className={`fixed inset-0 bg-deep-espresso/50 z-40 transition-opacity duration-300 md:hidden ${isMenuOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'}`} onClick={() => setIsMenuOpen(false)}></div>
      {/* Mobile Menu Slide Panel */}
      <div className={`fixed top-0 right-0 bottom-0 w-64 bg-warm-beige z-50 transform transition-transform duration-300 md:hidden ${isMenuOpen ? 'translate-x-0' : 'translate-x-full'}`}>
        <div className="flex flex-col h-full">
          {/* Mobile Menu Header */}
          <div className="flex items-center justify-between p-4 border-b border-olive-grey/10">
            <span className="font-outfit text-lg font-bold text-deep-espresso">
              Menu
            </span>
            <button onClick={() => setIsMenuOpen(false)} className="p-2 text-deep-espresso hover:text-olive-grey transition-colors" aria-label="Close menu">
              <X size={24} />
            </button>
          </div>
          {/* Mobile Menu Links */}
          <div className="flex-1 py-6 px-4 space-y-4">
            {navLinks.map(link => <button key={link.id} onClick={() => scrollToSection(link.id)} className={`block w-full text-left px-4 py-3 rounded-button font-medium transition-colors ${activeSection === link.id ? 'bg-soft-terracotta/10 text-soft-terracotta' : 'text-deep-espresso hover:bg-olive-grey/5 hover:text-olive-grey'}`}>
                {link.label}
              </button>)}
          </div>
          {/* Mobile Menu CTA */}
          <div className="p-4 border-t border-olive-grey/10">
            <button onClick={() => scrollToSection('contact')} className="w-full px-6 py-3 bg-soft-terracotta hover:bg-soft-terracotta/90 text-white rounded-button transition-colors font-medium">
              Get in Touch
            </button>
          </div>
        </div>
      </div>
      {/* Spacer to prevent content from being hidden under fixed nav */}
      <div className="h-16"></div>
    </>;
}