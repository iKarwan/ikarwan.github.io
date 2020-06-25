#import <Foundation/Foundation.h>


static BOOL pmp;

#define PLIST_PATH "/var/mobile/Library/Preferences/pro.ikghd.pmp.plist"
#define boolValueForKey(key) [[[NSDictionary dictionaryWithContentsOfFile:@(PLIST_PATH)] valueForKey:key] boolValue]

static void loadPrefs() {

  pmp  = boolValueForKey(@"pmp");

}


%hook PUAlbumListViewController

- (long long)numberOfVisualSectionsForSectionedGridLayout:(id)arg1 {
  loadPrefs();
    if (pmp ){
    return 1;
  }
    else return %orig;
}
%end


%hook PHFetchOptions
- (unsigned long long)includeAssetSourceTypes {
  loadPrefs();
    if (pmp ){
    return 2;
  }
    else return %orig;
}
%end


%hook PUAlbumListCellContentView
- (void)setSubtitle:(id)arg1 animated:(bool)arg2 {
  loadPrefs();
    if (pmp ){
      arg1 = @"0";
      %orig;
  }
    else return %orig;
}
%end



%hook PUSearchResultsDataSource
- (unsigned long long)numberOfSearchResults {
  loadPrefs();
    if (pmp ){
    return 0;
  }
    else return %orig;
}
%end


%hook PUSuggestedSearchResultsDataSource
- (void)setDelegate:(id)arg1 {
  loadPrefs();
    if (pmp ){
    arg1 = nil;
  }
    else return %orig;
}
%end
