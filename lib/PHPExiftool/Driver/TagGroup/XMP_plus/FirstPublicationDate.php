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
class FirstPublicationDate extends AbstractTagGroup
{

  protected string $id = 'XMP-plus:FirstPublicationDate';

  protected string $name = 'FirstPublicationDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PLUS::XMP
       * line : 265382
       * type : date
       * writable : true
       * count : 
       * flags : 
       */
      'id' => 'PLUS::XMP.XMP-plus:FirstPublicationDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2048;

}
