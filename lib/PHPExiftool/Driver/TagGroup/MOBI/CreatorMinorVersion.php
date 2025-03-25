<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorMinorVersion extends AbstractTagGroup
{

  protected string $id = 'MOBI:CreatorMinorVersion';

  protected string $name = 'CreatorMinorVersion';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273591
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::EXTH.MOBI:CreatorMinorVersion',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
