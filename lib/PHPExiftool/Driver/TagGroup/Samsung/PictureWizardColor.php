<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PictureWizardColor extends AbstractTagGroup
{

  protected string $id = 'Samsung:PictureWizardColor';

  protected string $name = 'PictureWizardColor';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Samsung::PictureWizard
       * line : 334139
       * type : int16u
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Samsung::PictureWizard.Samsung:PictureWizardColor',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
