<?php


/**
 * This class adds structure of 'author' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * Thu Dec 10 11:43:04 2009
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AuthorMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AuthorMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(AuthorPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(AuthorPeer::TABLE_NAME);
		$tMap->setPhpName('Author');
		$tMap->setClassname('Author');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('USERNAME', 'Username', 'VARCHAR', true, 100);

		$tMap->addColumn('EMAIL', 'Email', 'VARCHAR', true, 100);

		$tMap->addColumn('PASSWORD', 'Password', 'VARCHAR', false, 100);

		$tMap->addColumn('FULLNAME', 'Fullname', 'VARCHAR', true, 100);

		$tMap->addColumn('LOCATION', 'Location', 'VARCHAR', false, 100);

		$tMap->addColumn('HOMEPAGEURL', 'Homepageurl', 'VARCHAR', false, 255);

		$tMap->addColumn('ABOUT', 'About', 'VARCHAR', false, 255);

		$tMap->addColumn('AVATAR', 'Avatar', 'VARCHAR', false, 200);

		$tMap->addColumn('TWITTER_ID', 'TwitterId', 'VARCHAR', false, 50);

		$tMap->addColumn('CHECKHASH', 'Checkhash', 'VARCHAR', false, 255);

		$tMap->addColumn('PLUGINS_COUNT', 'PluginsCount', 'INTEGER', false, null);

		$tMap->addColumn('CONFIRMED_EMAIL', 'ConfirmedEmail', 'BOOLEAN', false, null);

		$tMap->addColumn('ADMIN', 'Admin', 'BOOLEAN', false, null);

		$tMap->addColumn('LOGGED_AT', 'LoggedAt', 'TIMESTAMP', false, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // AuthorMapBuilder
