<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ID3v2_4;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserDefinedURL extends AbstractTagGroup
{

  protected string $id = 'ID3v2_4:UserDefinedURL';

  protected string $name = 'UserDefinedURL';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'User Defined URL',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : ID3::v2_4
       * line : 150013
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ID3::v2_4.ID3v2_4:UserDefinedURL',
      'desc' => [
        'en' => 'User Defined URL',
      ],
    ],
  ];

}
