import React, { useEffect, useState } from 'react';
import { ArrowLeft } from 'lucide-react';
import { Link } from 'react-router-dom';
export function RicHerCaseStudy() {
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
    id: 'development',
    label: 'Product Development'
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
    label: 'Format Type',
    value: 'Dual-Host Vodcast'
  }, {
    label: 'Host Dynamic',
    value: 'Advisor + Aspiring Investor'
  }, {
    label: 'Development Cycles',
    value: '3 Iterations'
  }, {
    label: 'Target Audience',
    value: 'Female Investors (Asia)'
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
            Product: RicHer
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
            I built RicHer to address the content gap in financial media for the
            rapidly expanding segment of female investors in Asia's high-growth
            markets.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed text-lg">
            Despite growing momentum in women's investing, most content focused
            on inspiration over instruction: spotlighting successful women but
            rarely offering practical investing conversations or lived
            experiences. RicHer was designed as a peer-to-peer finance format by
            and for women, combining credible expertise with authentic,
            relatable storytelling.
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
            Audience and market research identified a fast-growing but
            underserved segment: women actively building wealth and investing.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            According to{' '}
            <a href="https://www.royalmint.com/aboutus/press-centre/the-royal-mint-sees-significant-uplift-in-female-investors-as-more-women-look-to-gold-and-silver-to-manage-investment-risk/" target="_blank" rel="noopener noreferrer" className="text-soft-terracotta hover:underline font-medium">
              The Royal Mint (2024)
            </a>
            , women investors grew from 8% to 26% between 2018-2023, with 27%
            planning to move savings into investments.{' '}
            <a href="https://www.ubs.com/global/en/wealthmanagement/who-we-serve/women-wealth/women-and-investing-in-mena-region/_jcr_content/root/pagehead/button1.1364837333.file/PS9jb250ZW50L2RhbS9hc3NldHMvd20vZ2xvYmFsL3dvbWVuLWFuZC1pbnZlc3RpbmcvZG9jL21lbmEtcmVwb3J0LXdvbWVuLWFuZC1pbnZlc3RpbmcucGRm/mena-report-women-and-investing.pdf" target="_blank" rel="noopener noreferrer" className="text-soft-terracotta hover:underline font-medium">
              UBS's 2023 Women and Investing Report
            </a>{' '}
            found that 62% of women in MENA aim to become more active investors,
            with strong interest in sustainable investing (55%) and private
            markets (39%).
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Despite this momentum, most content targeting women in finance
            focused on inspiration over instruction: spotlighting successful
            women or empowerment themes but rarely offering practical investing
            conversations or lived experiences.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            The global success of{' '}
            <a href="https://friendsthatinvest.com/" target="_blank" rel="noopener noreferrer" className="text-soft-terracotta hover:underline font-medium">
              Girls That Invest
            </a>{' '}
            validated this demand, though it remained largely Western-focused.
            Together, these insights pointed to a clear opportunity for a
            credible yet conversational platform offering practical, regionally
            relevant financial storytelling for women in Asia's fast-growing
            markets.
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
            RicHer was designed as a peer-to-peer vodcast conversation about
            money, investing, and entrepreneurship that felt both credible and
            human.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            The format paired two hosts — Raji, a 31-year-old certified
            financial advisor and investor, and Mahreen, a 22-year-old aspiring
            investor and entrepreneur — creating an older/younger-sister dynamic
            that blended expertise with curiosity. Both were successful creators
            and represented RicHer's target audience.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            Each episode explored finance through a singular lens: demystifying
            the biases and realities women face in investing and financial
            independence. The concept also envisioned community-led growth, with
            highly engaged audiences connecting on platforms such as Slack or
            Discord to continue discussions and share experiences.
          </p>
        </section>

        {/* Product Development */}
        <section id="development" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Product Development
            </h2>
          </div>
          <p className="text-deep-espresso/90 leading-relaxed mb-8">
            The RicHer format was developed through multiple rounds of
            prototyping and testing, with each iteration informed by user
            feedback and format testing:
          </p>

          <div className="space-y-6">
            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Iteration 1 — Solo Explainer Format
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                The initial concept featured Raji as a solo host breaking down
                finance topics. While clear and informative, user testing
                revealed it felt overly didactic, and the "by women, for women"
                perspective struggled to come through in this structure.
              </p>
            </div>

            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Iteration 2 — Interview Format
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                The next version cast Mahreen as a host interviewing successful
                women from the region. This format struggled with the same issue
                found in existing content for women: inspirational but not
                actionable. Mahreen came across as an interviewer rather than a
                peer, and guests felt distant rather than relatable.
              </p>
            </div>

            <div>
              <h3 className="font-semibold text-deep-espresso mb-2">
                Iteration 3 — Dual-Host Chat Format (Final)
              </h3>
              <p className="text-deep-espresso/90 leading-relaxed">
                The breakthrough came when we paired Raji and Mahreen together
                as co-hosts. The dynamic instantly worked: Mahreen's curiosity
                and Raji's expertise balanced each other perfectly. Their
                conversations felt authentic, informative, and approachable,
                capturing the tone and relatability the research called for.
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
            Early user testing confirmed the format's relatability and clarity,
            validating the dual-host chat approach.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-8">
            RicHer was greenlit just before Moniify's public launch, with
            release planned for Q1 2025. The product was discontinued shortly
            after the leadership transition and strategic pivot that followed
            the company's launch, before any public release.
          </p>

          <div className="bg-soft-terracotta/5 border-l-4 border-soft-terracotta rounded-r-lg p-6">
            <h3 className="font-semibold text-deep-espresso mb-3">
              Reflection
            </h3>
            <p className="text-deep-espresso/90 leading-relaxed">
              While RicHer never launched publicly, the iterative development
              process demonstrated how rapid prototyping and user feedback can
              fundamentally reshape product direction, moving from a didactic
              solo format to a peer-to-peer conversation that better served the
              target audience.
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

            <Link to="/case-study/moniify-daily" className="bg-light-beige border border-olive-grey/10 rounded-lg p-6 hover:shadow-md transition-shadow">
              <h3 className="font-semibold text-deep-espresso mb-2 text-lg hover:text-soft-terracotta transition-colors">
                Moniify Daily
              </h3>
              <p className="text-deep-espresso/70 text-sm">
                Weekday video product for new economy topics
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