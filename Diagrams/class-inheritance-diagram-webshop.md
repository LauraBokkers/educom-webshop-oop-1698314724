```mermaid
---
title: Class Inheritance Diagram - Webshop
---
classDiagram
    note "+ = public, - = private, # = protected"
    %% A <|-- B means that class B inherits from class A %%
    HtmlDoc <|-- BasicDoc

    BasicDoc <|-- HomeDoc
    BasicDoc <|-- AboutDoc
    BasicDoc <|-- FormDoc

    FormDoc <|-- ContactDoc
    FormDoc <|-- LoginDoc
    FormDoc <|-- RegisterDoc
    FormDoc <|-- ProductActionsDoc
        
    ProductActionsDoc  <|-- WebshopDoc
    ProductActionsDoc  <|-- ProductDoc
    ProductActionsDoc  <|-- ShoppingcartDoc


    class HtmlDoc{
       +show()
       -showHtmlStart()
       -showHeaderStart()
       #showHeaderContent()
       -showHeaderEnd()
       -showBodyStart()
       #showBodyContent()
       -showBodyEnd()
       -showHtmlEnd()
    }
    class BasicDoc{
        #data 
        +__construct(mydata)
        #showHeaderContent()
        -showTitle()
        -showCssLinks()
        #showBodyContent()
        -showHeader()
        -showMenu()
        #showContent()
        -showFooter()
    }
    class HomeDoc{
        #showHeaderContent()
        #showContent()
    }

    class AboutDoc{
        #showHeaderContent()
        #showContent()
    }


    class FormDoc{
        #showFormStart()
        #showFormField()
        #showFormEnd()
    }

    class ContactDoc{
        #data 
        #showHeaderContent()
        #showContent()
    }

    class LoginDoc{
        #data 
        #showHeaderContent()
        #showContent()
    }
    class RegisterDoc{
        #data 
        #showHeaderContent()
        #showContent()
    }


    class ProductActionsDoc{
        #showActionButton()
        #showFormStart()
        #showFormField()
    }


    class WebshopDoc{
        #data      
        #showHeaderContent()
        #showContent()
        -showProductCard()
    }

    class ShoppingcartDoc{
        #data 
        #showHeaderContent()
        #showContent()
        -showProductLine()
    }

    class ProductDoc{
        #data 
        #showHeaderContent()
        #showContent()
        -showProduct()
    }



