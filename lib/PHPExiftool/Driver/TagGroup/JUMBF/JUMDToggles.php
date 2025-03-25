<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\JUMBF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class JUMDToggles extends AbstractTagGroup
{

  protected string $id = 'JUMBF:JUMDToggles';

  protected string $name = 'JUMDToggles';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::JUMD
       * line : 154121
       * type : ?
       * writable : false
       * count : 
       * flags : unknown
       */
      'id' => 'Jpeg2000::JUMD.JUMBF:JUMDToggles',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 32;

}
