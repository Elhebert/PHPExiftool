<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ITC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TrackID extends AbstractTagGroup
{

  protected string $id = 'ITC:TrackID';

  protected string $name = 'TrackID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ITC::Item
       * line : 152117
       * type : undef
       * writable : false
       * count : 8
       * flags : 
       */
      'id' => 'ITC::Item.ITC:TrackID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 8;

}
