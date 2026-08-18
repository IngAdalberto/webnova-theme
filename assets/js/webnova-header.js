(function () {
  const header = document.querySelector("[data-webnova-header]");

  if (!header) {
    return;
  }

  const toggle = header.querySelector("[data-webnova-menu-toggle]");
  const nav = header.querySelector("[data-webnova-nav]");
  const menu = header.querySelector(".webnova-header__menu");
  const submenuItems = menu ? menu.querySelectorAll(".menu-item-has-children") : [];
  const mobileQuery = window.matchMedia("(max-width: 1024px)");

  const closeMenu = (returnFocus = false) => {
    header.classList.remove("webnova-header--menu-open");
    document.body.style.overflow = '';

    if (toggle) {
      toggle.setAttribute("aria-expanded", "false");
      toggle.setAttribute("aria-label", "Abrir menú principal");
      if (returnFocus) {
        toggle.focus();
      }
    }
  };

  const closeSubmenus = () => {
    submenuItems.forEach((item) => {
      const submenuToggle = item.querySelector(":scope > .webnova-header__submenu-toggle");

      item.classList.remove("is-submenu-open");

      if (submenuToggle) {
        submenuToggle.setAttribute("aria-expanded", "false");
      }
    });
  };

  submenuItems.forEach((item) => {
    const link = item.querySelector(":scope > a");
    const submenu = item.querySelector(":scope > .sub-menu");

    if (!link || !submenu || item.querySelector(":scope > .webnova-header__submenu-toggle")) {
      return;
    }

    const submenuId = submenu.id || "webnova-submenu-" + Math.random().toString(36).slice(2);
    const button = document.createElement("button");

    submenu.id = submenuId;
    button.type = "button";
    button.className = "webnova-header__submenu-toggle";
    button.setAttribute("aria-expanded", "false");
    button.setAttribute("aria-controls", submenuId);
    button.setAttribute("aria-label", "Abrir submenú de " + link.textContent.trim());

    button.addEventListener("click", () => {
      const isOpen = item.classList.toggle("is-submenu-open");

      button.setAttribute("aria-expanded", String(isOpen));
      button.setAttribute("aria-label", (isOpen ? "Cerrar" : "Abrir") + " submenú de " + link.textContent.trim());
    });

    link.insertAdjacentElement("afterend", button);
  });

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      const isOpen = header.classList.toggle("webnova-header--menu-open");

      toggle.setAttribute("aria-expanded", String(isOpen));
      toggle.setAttribute("aria-label", isOpen ? "Cerrar menú principal" : "Abrir menú principal");

      if (!isOpen) {
        closeSubmenus();
        document.body.style.overflow = '';
      } else {
        if (mobileQuery.matches) {
          document.body.style.overflow = 'hidden';
        }
      }
    });
  }

  document.addEventListener("keydown", (event) => {
    if (event.key !== "Escape") {
      return;
    }

    closeMenu(true);
    closeSubmenus();
  });

  document.addEventListener("click", (event) => {
    if (!mobileQuery.matches || header.contains(event.target)) {
      return;
    }

    closeMenu(false);
    closeSubmenus();
  });

  const handleViewportChange = (event) => {
    if (!event.matches) {
      closeMenu(false);
      closeSubmenus();
    }
  };

  if (typeof mobileQuery.addEventListener === "function") {
    mobileQuery.addEventListener("change", handleViewportChange);
  } else if (typeof mobileQuery.addListener === "function") {
    mobileQuery.addListener(handleViewportChange);
  }

  // Transparent header detection
  const transparentHero = document.querySelector('.has-transparent-header');
  if (transparentHero) {
    const heroRect = transparentHero.getBoundingClientRect();
    if (heroRect.top < 200) {
      header.classList.add('webnova-header--transparent');
    }
  }

  if (header.classList.contains("webnova-header--sticky")) {
    const updateStickyState = () => {
      header.classList.toggle("webnova-header--is-scrolled", window.scrollY > 8);
    };

    updateStickyState();
    window.addEventListener("scroll", updateStickyState, { passive: true });
  }
})();
