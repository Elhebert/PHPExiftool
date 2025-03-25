<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_Device;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PlaneBoundaryVertexCount extends AbstractTagGroup
{

  protected string $id = 'XMP-Device:PlaneBoundaryVertexCount';

  protected string $name = 'PlaneBoundaryVertexCount';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : XMP::Device
       * line : 396728
       * type : integer
       * writable : true
       * count : 
       * flags : flattened,list
       */
      'id' => 'XMP::Device.XMP-Device:PlaneBoundaryVertexCount',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2112;

}
