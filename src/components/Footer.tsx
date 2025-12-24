import React from 'react';
export function Footer() {
  return <footer className="py-8 border-t border-olive-grey/10">
      <div className="text-center">
        <p className="text-olive-grey text-sm">
          © {new Date().getFullYear()} Anna Barto. All rights reserved.
        </p>
        <div className="flex justify-center gap-6 mt-4">
          <a href="#" className="text-olive-grey hover:text-soft-terracotta text-sm">
            Privacy Policy
          </a>
          <a href="#" className="text-olive-grey hover:text-soft-terracotta text-sm">
            Terms of Use
          </a>
        </div>
      </div>
    </footer>;
}