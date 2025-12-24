import React, { useEffect, useState } from 'react';
import { ArrowLeft } from 'lucide-react';
import { Link } from 'react-router-dom';
export function MoniifyDailyCaseStudy() {
  const [activeSection, setActiveSection] = useState('');
  const sections = [{
    id: 'overview',
    label: 'Overview'
  }, {
    id: 'problem',
    label: 'Problem / Opportunity'
  }, {
    id: 'solution',
    label: 'Solution'
  }, {
    id: 'implementation',
    label: 'Implementation'
  }, {
    id: 'outcome',
    label: 'Outcome'
  }];
  useEffect(() => {
    const handleScroll = () => {
      const scrollPosition = window.scrollY + 120;
      for (let i = sections.length - 1; i >= 0; i--) {
        const section = document.getElementById(sections[i].id);
        if (section && section.offsetTop <= scrollPosition) {
          setActiveSection(sections[i].id);
          break;
        }
      }
    };
    handleScroll();
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
  };
  const stats = [{
    label: 'Content Length',
    value: '~15 min'
  }, {
    label: 'Publishing Cadence',
    value: 'Weekdays'
  }, {
    label: 'Focus Areas',
    value: 'Tech & Crypto'
  }, {
    label: 'Regional Lens',
    value: 'Asia-first'
  }];
  return <div className="min-h-screen bg-warm-beige">
      {/* Navigation */}
      <nav className="fixed top-0 left-0 right-0 z-50 bg-warm-beige border-b border-olive-grey/10 shadow-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <Link to="/" className="font-outfit text-xl font-bold text-deep-espresso hover:text-soft-terracotta transition-colors">
              Anna Barto
            </Link>
            <Link to="/case-study/moniify" className="flex items-center gap-2 text-deep-espresso hover:text-soft-terracotta transition-colors font-medium">
              <ArrowLeft size={16} />
              Back to Moniify Case Study
            </Link>
          </div>
        </div>
      </nav>

      {/* Spacer */}
      <div className="h-16"></div>

      {/* Sticky Sidebar TOC - Desktop Only */}
      <aside className="hidden xl:block fixed left-8 top-32 w-56 z-40">
        <div className="bg-light-beige rounded-lg border border-olive-grey/10 p-4 shadow-soft">
          <h3 className="font-outfit text-sm font-semibold text-deep-espresso mb-4 uppercase tracking-wide">
            Contents
          </h3>
          <nav className="relative">
            {/* Progress indicator line */}
            <div className="absolute left-0 top-0 bottom-0 w-0.5 bg-olive-grey/20"></div>
            <div className="absolute left-0 top-0 w-0.5 bg-soft-terracotta transition-all duration-300 ease-out" style={{
            height: `${(sections.findIndex(s => s.id === activeSection) + 1) / sections.length * 100}%`
          }}></div>

            <ul className="space-y-1 relative">
              {sections.map(section => <li key={section.id}>
                  <button onClick={() => scrollToSection(section.id)} className={`w-full text-left pl-4 pr-2 py-2 text-sm transition-all duration-200 rounded ${activeSection === section.id ? 'text-soft-terracotta font-medium' : 'text-deep-espresso/70 hover:text-deep-espresso'}`}>
                    {section.label}
                  </button>
                </li>)}
            </ul>
          </nav>
        </div>
      </aside>

      {/* Content */}
      <main className="max-w-[1040px] mx-auto px-4 sm:px-6 lg:px-8 xl:pl-72 py-12 md:py-16">
        {/* Hero Section */}
        <div id="overview" className="bg-light-beige rounded-card shadow-soft p-8 md:p-12 mb-20 border border-olive-grey/10">
          <h1 className="font-outfit text-4xl md:text-5xl font-bold text-deep-espresso mb-6">
            Product: Moniify Daily
          </h1>

          {/* Role */}
          <div className="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
            <div>
              <span className="font-semibold text-deep-espresso">Role:</span>{' '}
              <span className="text-deep-espresso/90">Product Lead</span>
            </div>
          </div>

          {/* Condensed Overview */}
          <p className="text-deep-espresso/90 leading-relaxed text-lg mb-6">
            Together with the Senior Executive Producer, I built Moniify Daily
            to address the coverage gap around crypto, AI, and emerging markets
            for Zillennial professionals in high-growth economies.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed text-lg">
            Traditional business media covered these "new economy" topics
            intermittently and rarely from an Asian or youth-centric
            perspective. Moniify Daily was designed to combine credible business
            insight with the accessible tone and cultural relevance of modern
            digital media.
          </p>
        </div>

        {/* Quick Stats */}
        <div className="grid grid-cols-2 md:grid-cols-4 gap-4 mb-24">
          {stats.map((stat, index) => <div key={index} className="bg-soft-terracotta/5 border border-soft-terracotta/20 rounded-lg p-6 text-center">
              <div className="text-3xl font-bold text-soft-terracotta mb-2">
                {stat.value}
              </div>
              <div className="text-sm text-deep-espresso/70">{stat.label}</div>
            </div>)}
        </div>

        {/* Problem / Opportunity */}
        <section id="problem" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Problem / Opportunity
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Audience and competitive research revealed that "new economy" topics
            — tech, AI, crypto, and emerging markets — were under-covered by
            legacy outlets and rarely reflected an Asian or Zillennial
            perspective.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Regional business content existed but was formal and focused
            narrowly on markets and macro. Global digital formats covering
            crypto or tech reflected Western perspectives and lacked relevance
            for audiences in Asia's high-growth economies.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            Audiences referenced{' '}
            <a href="https://www.morningbrew.com/" target="_blank" rel="noopener noreferrer" className="text-soft-terracotta hover:underline font-medium">
              Morning Brew
            </a>{' '}
            as a model for accessible tone and digestible structure but wanted a
            version that reflected their markets and context.
          </p>
        </section>

        {/* Solution */}
        <section id="solution" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Solution
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Moniify Daily was designed as a weekday video product sitting
            between a daily news briefing and a morning catch-up with trusted
            experts.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Each ~15-minute episode, filtered through a regional lens, focused
            on the new economy — translating complex shifts in tech, crypto, and
            markets into "what it means for me" takeaways.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            Hosted by experienced digital creators and subject-matter experts,
            the product paired professional production with personality, strong
            opinions, and debate — creating an accessible, credible experience
            built for daily engagement.
          </p>
        </section>

        {/* Implementation */}
        <section id="implementation" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Implementation
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-8">
            I led the end-to-end product build together with the Senior
            Executive Producer, from format development to distribution
            planning:
          </p>

          <div className="space-y-6">
            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Format Development & Testing
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                Ran internal prototypes with the editorial team to refine
                pacing, tone, and segment structure. Post-launch, led A/B tests
                on retention, discovery, and click-through rates to optimize
                content flow.
              </p>
            </div>

            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Team & Talent
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                With the Senior Executive Producer, assembled a cross-functional
                team of producers, editors, designers, and social leads. Co-led
                scouting and contracting of hosts combining subject-matter
                expertise with digital fluency.
              </p>
            </div>

            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Brand System
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                Led development of the product's visual and sonic identity with
                design, extending Moniify's brand framework while giving Daily a
                distinct, repeatable presence.
              </p>
            </div>

            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Distribution & Launch
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                Partnered with design and tech on website user flows for Daily
                content (also distributed via YouTube). Coordinated launch with
                marketing and PR, though paid promotion was halted before
                launch.
              </p>
            </div>
          </div>
        </section>

        {/* Outcome */}
        <section id="outcome" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Outcome
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-8">
            Moniify Daily launched two weeks after the company's public debut.
            Early feedback on tone and content was positive, but the product was
            discontinued soon after launch amid company-wide budget cuts and a
            strategic pivot, before meaningful performance data could be
            collected.
          </p>

          <div className="bg-olive-grey/5 border-l-4 border-olive-grey/30 rounded-r-lg p-6 mb-8">
            <h3 className="font-semibold text-deep-espresso mb-3">
              Constraints
            </h3>
            <p className="text-deep-espresso/90 leading-relaxed">
              The product launched into a challenging environment: all paid
              advertising had been frozen before launch, limiting audience
              acquisition. Engineering resource constraints delayed key website
              features. The product's short lifespan — just weeks from
              launch to discontinuation — prevented any meaningful iteration and performance evaluation.
            </p>
          </div>

          <div className="bg-soft-terracotta/5 border-l-4 border-soft-terracotta rounded-r-lg p-6">
            <h3 className="font-semibold text-deep-espresso mb-3">
              Reflection
            </h3>
            <p className="text-deep-espresso/90 leading-relaxed">
              While Moniify Daily demonstrated early promise in addressing a
              coverage gap for Zillennial audiences in high-growth markets, the
              lack of distribution support and early discontinuation meant the
              product never had the opportunity to prove its viability. The
              experience highlighted the critical importance of sustained investment in validating new product
              formats.
            </p>
          </div>
        </section>

        {/* Related Case Studies */}
        <section className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Related Case Studies
            </h2>
          </div>
          <div className="grid md:grid-cols-2 gap-6">
            <Link to="/case-study/moniify" className="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
              <h3 className="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">
                Building 0→1 Products at Moniify
              </h3>
              <p className="text-deep-espresso/70 text-sm">
                Product strategy and 0→1 building at a media startup
              </p>
            </Link>

            <Link to="/case-study/moniify-creators" className="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
              <h3 className="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">
                Moniify Creators
              </h3>
              <p className="text-deep-espresso/70 text-sm">
                Integrating credible creators into editorial output
              </p>
            </Link>

            <Link to="/case-study/richer" className="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
              <h3 className="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">
                RicHer
              </h3>
              <p className="text-deep-espresso/70 text-sm">
                Female-led finance and investing format
              </p>
            </Link>
          </div>
        </section>
      </main>

      {/* Footer */}
      <footer className="py-8 border-t border-olive-grey/10 mt-16">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="text-center">
            <p className="text-olive-grey text-sm">
              © {new Date().getFullYear()} Anna Barto. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </div>;
}