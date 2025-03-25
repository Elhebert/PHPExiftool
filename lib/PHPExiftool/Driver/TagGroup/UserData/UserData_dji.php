<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\UserData;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserData_dji extends AbstractTagGroup
{

  protected string $id = 'UserData:UserData_dji';

  protected string $name = 'UserData_dji';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::UserData
       * line : 325819
       * type : undef
       * writable : true
       * count : 
       * flags : binary,unknown
       */
      'id' => 'QuickTime::UserData.UserData:UserData_dji',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2082;

}
