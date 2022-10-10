training goal
1. Do more mature OOP
    a. dont expect ppl spend time come to understand your code and your structure, you dont want ppl spend time to understand the complication
    b. always plan another person will continue your work, cause you may leave company, you may promoted to high level to do different things
    c. there is somebody will continue your work, you need to guarantee your code is stable and predictable (unit test)
    d. if necessary, redo the program, restructure the content, exchange time with stability, thats is more worthy then unlimited bug fix afterwards
    e. process object always, 1 table 1 object
        dont pass string/int value between function/class, later on need recode fetch object activity
        each object having the suitable propeties and methods, using object allow ide help u autocomplete codes, and see explanation
    f. use setter getter
    g. define validation function for all properties
    h. ensure there is no redundant code exists at different object/class, that will create unlimited bugs
    i. in oop, we manipulate object every time, the object itself shall have interface connect to database level, try all best dont access interface level in most of the methods.
    j. 100% presentation/front end element, dont define at model level.

2. create an project for tuition centre system, manage fees. 
    we wish to handle student, parents, teachers, fees, enrollments, payments
    create cli function to manage all this activitis
    add db functions
    keep said change field name, change db engine let programmer suffer
        - understand the interfaces


There is 2 kind of training methods in my mind, 1 session or continually 3 session in 3 days 
1 session workshop: straight to the point, don't want to know why and and programmer just follow instruction
3 session workshop: the OOP ideal carve into their brain, the programmer will experience from bad design to good design.