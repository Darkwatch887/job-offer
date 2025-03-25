import React from 'react';
import styled from 'styled-components';
import Link from 'next/link';
import Image from 'next/image';

const Header = styled.header`
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background-color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
`;

const Logo = styled.div`
  position: relative;
  width: 150px;
  height: 50px;
`;

const Nav = styled.nav`
  display: flex;
  gap: 2rem;
`;

const NavLink = styled.a`
  text-decoration: none;
  color: #333;
  font-weight: 500;
  font-size: 1.1rem;
  padding: 0.5rem;
  transition: color 0.2s ease;

  &:hover {
    color: #0066cc;
  }
`;

const HomePage: React.FC = () => {
  return (
    <div>
      <Header>
        <Logo>
          <Image
            src="/media/homepage/tlc-logo.png"
            alt="TLC Logo"
            layout="fill"
            objectFit="contain"
          />
        </Logo>
        <Nav>
          <Link href="/" passHref>
            <NavLink>Home</NavLink>
          </Link>
          <Link href="/over-ons" passHref>
            <NavLink>Over ons</NavLink>
          </Link>
          <Link href="/vacatures" passHref>
            <NavLink>Vacatures</NavLink>
          </Link>
          <Link href="/contact" passHref>
            <NavLink>Contact</NavLink>
          </Link>
        </Nav>
      </Header>
    </div>
  );
};

export default HomePage; 