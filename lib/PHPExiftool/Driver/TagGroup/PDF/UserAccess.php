<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PDF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserAccess extends AbstractTagGroup
{

  protected string $id = 'PDF:UserAccess';

  protected string $name = 'UserAccess';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PDF::Encrypt
       * line : 264072
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PDF::Encrypt.PDF:UserAccess',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
