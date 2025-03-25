<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_xmpTPg;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SwatchColorantGreen extends AbstractTagGroup
{

  protected string $id = 'XMP-xmpTPg:SwatchColorantGreen';

  protected string $name = 'SwatchColorantGreen';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::xmpTPg
       * line : 414581
       * type : integer
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::xmpTPg.XMP-xmpTPg:SwatchColorantGreen',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
