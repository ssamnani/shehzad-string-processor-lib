const regex = /.+next release version is (.*)/gm;

const { exec } = require('child_process');
const cmd = "npx semantic-release --dry-run";

exec(cmd, (err, stdout, stderr) => {
    if (err) {
        console.error(`exec error: ${err}`);
        return;
    }

    let m;

    if ((m = regex.exec(stdout)) !== null) {
        // This is necessary to avoid infinite loops with zero-width matches
        if (m.index === regex.lastIndex) {
            regex.lastIndex++;
        }

        console.log(m[1]);
    }
});