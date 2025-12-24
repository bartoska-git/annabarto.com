import React, { useEffect, useState, Fragment } from 'react';
import { ArrowLeft, ArrowRight } from 'lucide-react';
import { Link } from 'react-router-dom';
export function AirtableAppCaseStudy() {
  const [activeSection, setActiveSection] = useState('');
  const sections = [{
    id: 'overview',
    label: 'Overview'
  }, {
    id: 'problem',
    label: 'Problem / Opportunity'
  }, {
    id: 'approach',
    label: 'Approach & Execution'
  }, {
    id: 'impact',
    label: 'Impact'
  }, {
    id: 'related',
    label: 'Related Case Studies'
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
    label: 'Automated Handoffs/Year',
    value: '10K+'
  }, {
    label: 'Video Workflows/Year',
    value: '700+'
  }, {
    label: 'Deliverables/Month',
    value: '240'
  }, {
    label: 'Agency Pipelines',
    value: '5'
  }];
  const relatedCaseStudies = [{
    title: 'Building 0→1 Products (Moniify)',
    description: 'Product strategy and 0→1 building at a media startup',
    slug: 'moniify'
  }, {
    title: 'Moniify Creators',
    description: 'Integrating credible creators into editorial output',
    slug: 'moniify-creators'
  }];
  return <div className="min-h-screen bg-warm-beige">
      {/* Navigation */}
      <nav className="fixed top-0 left-0 right-0 z-50 bg-warm-beige border-b border-olive-grey/10 shadow-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex items-center justify-between h-16">
            <Link to="/" className="font-outfit text-xl font-bold text-deep-espresso hover:text-soft-terracotta transition-colors">
              Anna Barto
            </Link>
            <Link to="/#portfolio" className="flex items-center gap-2 text-deep-espresso hover:text-soft-terracotta transition-colors font-medium">
              <ArrowLeft size={16} />
              Back to Portfolio
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
            Custom Airtable App (Moniify)
          </h1>

          {/* Role & Focus - Visually Distinct */}
          <div className="bg-soft-terracotta/10 border-l-4 border-soft-terracotta rounded-r-lg p-4 mb-8">
            <div className="mb-2">
              <span className="font-semibold text-deep-espresso">Role:</span>{' '}
              <span className="text-deep-espresso/90">Product Lead</span>
            </div>
            <div>
              <span className="font-semibold text-deep-espresso">Focus:</span>{' '}
              <span className="text-deep-espresso/90">
                System Architecture · Workflow Automation · Internal Tooling
              </span>
            </div>
          </div>

          {/* Condensed Overview */}
          <p className="text-deep-espresso/90 leading-relaxed text-lg">
            I designed and built a custom Airtable app that automated 10K+
            manual handoffs across 700+ video workflows per year. The unified
            editorial workflow platform combined relational database logic,
            dynamic automations, and tailored interfaces for each user group.
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
            <Link to="/case-study/moniify" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">
              Moniify
            </Link>{' '}
            was a product-led media startup targeting Zillennials interested in
            building financial independence. Among its portfolio,{' '}
            <Link to="/case-study/moniify-creators" className="text-soft-terracotta hover:text-soft-terracotta/80 transition-colors font-medium">
              Moniify Creators
            </Link>{' '}
            stood out for its scale, commissioning twelve creators who delivered
            ≈240 assets per month across five agency pipelines. Integrating
            creators directly into editorial production was a new model for
            business media, creating two core challenges for the product's small
            3.5-person editorial team.
          </p>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Challenge 1: Volume & Fragmentation
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-12">
            Each agency partner used their own spreadsheets and chat threads to
            manage production, causing lost approvals, conflicting versions, and
            difficulty tracking progress. Unlike Moniify's other products (which
            used one partner each), Creators demanded enterprise-level workflow
            infrastructure—but engineering resources were extremely limited.
          </p>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Challenge 2: Confidentiality & Access Control
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            Every agency and creator operated under separate agreements. The
            system needed to restrict partners to only their own work, while
            giving the internal editorial team edit access across all pipelines
            and leadership read-only visibility.
          </p>
        </section>

        {/* Approach & Execution */}
        <section id="approach" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Approach & Execution
            </h2>
          </div>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Tool Context
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            Airtable had been adopted company-wide as the project-management
            tool, but most teams used it like a spreadsheet.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-12">
            Moniify Creators required a database, a workflow engine, and tiered
            interfaces: all in one.
          </p>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            System Design & Build
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            I mapped the entire editorial workflow end-to-end — from idea
            submission and script review to final delivery — to identify
            dependencies, repetitive steps, and common failure points.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed mb-2 font-semibold">
            Main tables:
          </p>
          <ul className="space-y-3 mb-6">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Content Ideas (source record referenced across all stages)
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Production Deliverables
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">Publishing</span>
            </li>
          </ul>
          <p className="text-deep-espresso/90 leading-relaxed mb-2 font-semibold">
            Sample of auxiliary tables:
          </p>
          <ul className="space-y-3 mb-6">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">Teams</span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">Content Categories</span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">Creators</span>
            </li>
          </ul>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            Together, these relationships enabled dynamic fields, lookup and
            rollup, that pulled and displayed key data across the system,
            eliminating duplication and creating a single source of truth.
          </p>

          <h4 className="font-outfit text-lg font-semibold text-deep-espresso mb-3 mt-8">
            Automations
          </h4>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            Using Airtable's native tools, I built rule-based triggers that:
          </p>
          <ul className="space-y-3 mb-8">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Generated new records based on approvals
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Notified teams when ideas and deliverables were ready
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Pushed the projects to the next workflow stage
              </span>
            </li>
          </ul>

          <h4 className="font-outfit text-lg font-semibold text-deep-espresso mb-3 mt-8">
            Interfaces
          </h4>
          <p className="text-deep-espresso/90 leading-relaxed mb-4">
            I created three experience layers:
          </p>
          <ul className="space-y-3 mb-12">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Editorial Interface — for daily content management
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Leadership Dashboard — high-level progress across all pipelines
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Agency Interfaces — five partner-specific views with conditional
                access and edit permissions.
              </span>
            </li>
          </ul>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Rollout & Adoption
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-12">
            After internal testing with the editorial team, the system was
            rolled out to agency partners. I onboarded users through short
            training sessions, and refined automation dependencies based on
            early feedback.
          </p>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Taking Ownership Under Constraints
          </h3>
          <p className="text-deep-espresso/90 leading-relaxed mb-6">
            With only a remote, part-time Airtable consultant available, I
            independently determined what the system needed to do (the jobs to
            be done) and how to make it possible in Airtable.
          </p>
          <p className="text-deep-espresso/90 leading-relaxed">
            Through documentation, experimentation, and ChatGPT-assisted
            troubleshooting, I uncovered Airtable's app-building capabilities as
            I went, designing, debugging, and scaling the system myself.
          </p>
        </section>

        {/* Impact */}
        <section id="impact" className="mb-24">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-6">
            <h2 className="font-outfit text-3xl font-bold text-deep-espresso">
              Impact
            </h2>
          </div>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Workflow Efficiency
          </h3>
          <ul className="space-y-3 mb-12">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Automated 10K+ handoffs/year across 700+ workflows
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Turned multi-hour coordination tasks into near-instant updates
              </span>
            </li>
          </ul>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Adoption & Usage
          </h3>
          <ul className="space-y-3 mb-12">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Used daily by all five agency pipelines (~20 external partners)
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Used daily by the product's editorial team (3.5 head-count)
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Used weekly by ~10 internal stakeholders (leadership &
                cross-functional team leads)
              </span>
            </li>
          </ul>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Operational Visibility
          </h3>
          <ul className="space-y-3 mb-12">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Replaced spreadsheets, chats, and ad hoc updates with one source
                of truth
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Provided multi-level access and visibility to editorial,
                leadership, cross-functional, and external agency teams
              </span>
            </li>
          </ul>

          <h3 className="font-outfit text-xl font-semibold text-deep-espresso mb-4">
            Standardization & Governance
          </h3>
          <ul className="space-y-3">
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Introduced consistent structures for naming, statuses,
                approvals, and deliverable logic
              </span>
            </li>
            <li className="flex items-start">
              <span className="text-soft-terracotta mr-3 mt-1">•</span>
              <span className="text-deep-espresso/90">
                Enabled predictable, scalable production at startup speed
              </span>
            </li>
          </ul>
        </section>

        {/* Related Case Studies */}
        <section id="related">
          <div className="inline-block bg-soft-terracotta/10 px-4 py-2 rounded-lg mb-8">
            <h2 className="font-outfit text-2xl font-bold text-deep-espresso">
              Related Case Studies
            </h2>
          </div>
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            {relatedCaseStudies.map((study, index) => <Link key={index} to={`/case-study/${study.slug}`} className="group bg-light-beige rounded-lg p-6 border border-olive-grey/10 hover:border-soft-terracotta/30 transition-all">
                <h3 className="font-outfit text-lg font-semibold text-deep-espresso mb-2 group-hover:text-soft-terracotta transition-colors">
                  {study.title}
                </h3>
                <p className="text-deep-espresso/70 text-sm">
                  {study.description}
                </p>
              </Link>)}
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