<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpecApproximation extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:ColorSpecApproximation';

  protected string $name = 'ColorSpecApproximation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::ColorSpec
       * line : 153708
       * type : int8s
       * writable : true
       * count : 
       * flags : unsafe
       */
      'id' => 'Jpeg2000::ColorSpec.Jpeg2000:ColorSpecApproximation',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2064;

}
