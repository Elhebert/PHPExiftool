<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_plus;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EndUser extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:EndUser';

  protected string $name = 'EndUser';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265363
       * type : struct
       * writable : true
       * count : 
       * flags : list,seq
       */
      'id' => 'PLUS::XMP.XMP-plus:EndUser',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2624;

}
