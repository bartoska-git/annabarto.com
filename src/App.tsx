import React from 'react';
import { Navigation } from './components/Navigation';
import { Hero } from './components/Hero';
import { LogoStrip } from './components/LogoStrip';
import { Portfolio } from './components/Portfolio';
import { Writing } from './components/Writing';
import { Capabilities } from './components/Capabilities';
import { Testimonials } from './components/Testimonials';
import { Contact } from './components/Contact';
import { Footer } from './components/Footer';
export function App() {
  return <div className="w-full min-h-screen bg-warm-beige text-deep-espresso font-dm-sans">
      <Navigation />
      <main className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <Hero />
        <LogoStrip />
        <Portfolio />
        <Writing />
        <Capabilities />
        <Testimonials />
        <Contact />
        <Footer />
      </main>
    </div>;
}