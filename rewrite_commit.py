# Save this script as rewrite_commit_dates.py in the root of your repository
from git_filter_repo import Repository

def set_midnight(date):
    return date[:10] + " 00:00:00 +0000"

def commit_callback(commit):
    commit.author_date = set_midnight(commit.author_date)
    commit.committer_date = set_midnight(commit.committer_date)

repo = Repository(".")
repo.filter(commits=commit_callback)
